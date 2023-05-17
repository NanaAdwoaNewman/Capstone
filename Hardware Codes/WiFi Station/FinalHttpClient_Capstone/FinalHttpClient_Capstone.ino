#include <HardwareSerial.h>
#include <TinyGsmClient.h> 
#include <WiFi.h>
#include <string.h>

#define Serialgsm Serial1
// connect rx of the gsm to pin 27 of esp32 and tx of gsm to 26 of the esp32
#define TINY_GSM_MODEM_SIM800

TinyGsm modem(Serialgsm); 
WiFiServer server(80);

String header;
const char apn[] = "internet"; 
char ssidAP[] = "ESP32APNIM";
char passwordAP[] = "12345678"; 
char temp[100] = "";
char nulls[] = "";
char c_string[5]= "";

int counter = 0;

void setup(){
    Serial.begin(115200);
    delay(1000);
    
    Serialgsm.begin(115200,SERIAL_8N1,26,27);
    gsm_setup(); 

    Serial.print("Setting AP (Access Point)…");
    // Remove the password parameter, if you want the AP (Access Point) to be open
    WiFi.softAP(ssidAP, passwordAP);
  
    IPAddress IP = WiFi.softAPIP();
    Serial.print("AP IP address: ");
    Serial.println(IP);
    
    server.begin(); 
    
}

void loop(){
  Serial.println("now in the loop");
    if (!modem.isGprsConnected()) {
      if (!modem.gprsConnect(apn)) {
        Serial.println(" fail");
        delay(10000);
        return;
      }
      if (modem.isGprsConnected()) { Serial.println("GPRS reconnected"); }
    }
  WiFiClient client = server.available();   // Listen for incoming clients
  
  if (client) {                             // If a new client connects,
    Serial.println("New Client.");          // print a message out in the serial port
    String currentLine = "";                // make a String to hold incoming data from the client
    while (client.connected()) {            // loop while the client's connected
      if (client.available()) {             // if there's bytes to read from the client,
        uint32_t bytesAvail = client.available();
        uint32_t p=0;
        char temp[100];
        while(bytesAvail>0) {
          temp[p++] = client.read();
          bytesAvail--;
        }
        Serial.println(temp);
        Serial.println("received data");
        client.println("received data");
      }
    }
    // Close the connection
    client.stop();
    Serial.println("Client disconnected.");
    Serial.println("");
  } 
}

void gsm_setup(){
if(!modem.init()){
        Serial.println("Failed to initialise modem.");
      return; 
      }
    String modem_name = modem.getModemName(); 
    Serial.print("modem_name is: ");
    Serial.println(modem_name);
    String modem_information = modem.getModemInfo(); 
    Serial.print("modem information:  "); 
    Serial.println(modem_information);
    Serial.println("Modem now waiting for network"); 
    if(!modem.waitForNetwork(600000L,true)){delay(6000);return;}
    if(modem.isNetworkConnected()){Serial.println("modem connected to the network");}
    if(!modem.gprsConnect(apn)){
      Serial.println("failed to connect to the apn"); 
      delay(1000); 
      return;
    }
    Serial.println("check point 2");
   if(modem.isGprsConnected()){
      Serial.println("gprs is connected"); 
   } 
    else{Serial.println("No gprs connection");}  
}

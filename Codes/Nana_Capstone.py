import pandas as pd 
import numpy as np 
from numpy.fft import fft, fftshift, ifft
import matplotlib.pyplot as plt

# read excel in data frame 
data_frame = pd.read_excel(r"C:\Users\THINKPAD\Desktop\Temperature_Data.xlsx") 
 
# convert data frame to Numpy 2D array 
filecontent = np.asarray(data_frame)
time_h = filecontent[:, 0]
falci_data1 = filecontent[:, 1]
falci_data2 = filecontent[:, 2]
falci_data3 = filecontent[:, 3]

#Generate Frequency values
Fs = 1;                     # samples per second
dt = 1/Fs;                     # seconds per sample
N = len(time_h)
dF = Fs/N;                      # hertz
f = np.arange(-Fs/2,(Fs/2),dF)         # hertz
freq = np.round(f,10)

#Fourier Transform
X = fftshift(fft(falci_data3)) 
Amplitude = np.abs(X/N)

#Get only positive side of frequency spectrum
zero_freq = [i for (i, val) in enumerate(freq) if val == 0]
index_zf = zero_freq[0]
Amplitude[index_zf]= 0
pos_Amp = Amplitude[index_zf:len(Amplitude)]
pos_freq = freq[index_zf:len(Amplitude)]

#Get dominant frequency component
max_Amp = np.max(pos_Amp)
dom_freq = [i for (i, val) in enumerate(pos_Amp) if val == max_Amp]
index_df = dom_freq[0]
print(pos_Amp[index_df])
print(pos_freq[index_df])

plt.figure(figsize = (12, 6))
plt.subplot(121)

plt.stem(freq, Amplitude, 'b', \
         markerfmt=" ", basefmt="-b")
plt.xlabel('Freq (per hour)')
plt.ylabel('FFT Amplitude |X(freq)|')
plt.xlim(-10, 10)

plt.subplot(122)
plt.plot(time_h, ifft(fft(falci_data1)), 'r')
plt.xlabel('Time (h)')
plt.ylabel('Amplitude')
plt.tight_layout()
plt.show()




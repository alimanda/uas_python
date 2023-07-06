import pandas as pd
import matplotlib.pyplot as plt

df = pd.read_csv("https://raw.githubusercontent.com/alimanda/csv/main/data.csv")

kecamatanCount = df['wilayah']
df_4 = pd.DataFrame(kecamatanCount).reset_index()
df_4.rename(columns = {'index':'wilayah', 'wilayah':'jumlah'}, inplace = True)
fig = plt.figure(figsize = (15, 5))
plt.bar(df_4['jumlah'], df_4['wilayah'], color ='pink',width = 0.4)
plt.xticks(size=12,rotation = "vertical")
plt.yticks(size=12)
plt.title('Wilayah yang memiliki jenis usaha', size=16)
plt.ylabel('jumlah usaha', size=14)
plt.show()
import pandas as pd
import matplotlib.pyplot as plt

df = pd.read_csv('https://raw.githubusercontent.com/alimanda/csv/main/data.csv')

kecamatanCount = df['jenis_usaha']
df_4 = pd.DataFrame(kecamatanCount).reset_index()
df_4.rename(columns = {'index':'jenis_usaha', 'jenis_usaha':'jumlah'}, inplace = True)
fig = plt.figure(figsize = (10, 7))
plt.bar(df_4['jumlah'], df_4['jenis_usaha'], color ='pink',)
plt.xticks(size=12,rotation = "vertical")
plt.yticks(size=12)
plt.title('Banyak Jenis Usaha yang ada di jakarta')
plt.ylabel('jumlah jenis usaha')
plt.show()
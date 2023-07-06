import pandas as pd
import matplotlib.pyplot as plt

df = pd.read_csv("https://raw.githubusercontent.com/alimanda/csv/main/data.csv")

data = df['wilayah'].unique()
specified = df.loc[df['wilayah'] == 'Jakarta Pusat']
newDf = pd.DataFrame(specified).reset_index()
fig = plt.figure(figsize = (15, 5))
newDf.rename(columns = {'index':'jenis_usaha','jenis_usaha':'jumlah'}, inplace = True)
plt.bar(newDf['jumlah'], newDf['jenis_usaha'], color ='pink',width = 0.4)
plt.xticks(size=12,rotation = "vertical")
plt.yticks(size=12)
plt.title('Sebaran Jenis Usaha yang ada di Jakarta Pusat', size=16)
plt.ylabel('jumlah jenis usaha', size=14)
plt.show()
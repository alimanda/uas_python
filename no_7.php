<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alimanda Sahbana</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://pyscript.net/alpha/pyscript.css" />
    <script defer src="https://pyscript.net/alpha/pyscript.js"></script>
    <py-env>
      - pandas
      - matplotlib
    </py-env>
</head>

<body>
    <!-- =============== Navigation ================ -->
    <?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                        <ion-icon name="clipboard"></ion-icon>
                        </span>
                        <span class="title">Alimanda Sahbana</span>
                    </a>
                </li>

                <li>
                    <a href="no_3.php">
                        <span class="icon">
                        <ion-icon name="play"></ion-icon>
                        </span>
                        <span class="title">No. 3</span>
                    </a>
                </li>

                <li>
                    <a href="no_4.php">
                        <span class="icon">
                        <ion-icon name="play"></ion-icon>
                        </span>
                        <span class="title">No. 4</span>
                    </a>
                </li>

                <li>
                    <a href="no_5.php">
                        <span class="icon">
                        <ion-icon name="play"></ion-icon>
                        </span>
                        <span class="title">No. 5</span>
                    </a>
                </li>

                <li>
                    <a href="no_6.php">
                        <span class="icon">
                        <ion-icon name="play"></ion-icon>
                        </span>
                        <span class="title">No. 6</span>
                    </a>
                </li>

                <li>
                    <a href="no_7.php">
                        <span class="icon">
                        <ion-icon name="play"></ion-icon>
                        </span>
                        <span class="title">No. 7</span>
                    </a>
                </li>

                <li>
                    <a href="no_8.php">
                        <span class="icon">
                        <ion-icon name="play"></ion-icon>
                        </span>
                        <span class="title">No. 8</span>
                    </a>
                </li>

                <li>
                    <a href="logout.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="assets/imgs/customer01.jpg" alt="">
                </div>
            </div>
            <div id="jakarta_barat"></div>
    <div id="jakarta_pusat"></div>
    <div id="jakarta_Selatan"></div>
    <div id="jakarta_timur"></div>
    <div id="jakarta_utara"></div>
    <py-script>
        import pandas as pd
        import matplotlib.pyplot as plt
        plt.rcParams.update({'figure.max_open_warning': 0})
        from pyodide.http import open_url
        url = open_url("https://raw.githubusercontent.com/alimanda/csv/main/data.csv")
        df = pd.read_csv(url)
    </py-script>
    <py-script output="jakarta_barat">
      data = df['wilayah'].unique()
      specified = df.loc[df['wilayah'] == 'Jakarta Barat']
      newDf = pd.DataFrame(specified).reset_index()
      fig = plt.figure(figsize = (15, 5))
      newDf.rename(columns = {'index':'kecamatan','kecamatan':'jumlah'}, inplace = True)
      plt.bar(newDf['jumlah'], newDf['kecamatan'], color ='pink',width = 0.4)
      plt.xticks(size=12,rotation = "vertical")
      plt.yticks(size=12)
      plt.title('Sebaran Jenis Usaha yang ada di wilayah Jakarta Barat ', size=16)
      plt.ylabel('jumlah jenis usaha', size=14)
      plt
    </py-script>
    <py-script output="jakarta_pusat">
      data = df['wilayah'].unique()
      specified = df.loc[df['wilayah'] == 'Jakarta Pusat']
      newDf = pd.DataFrame(specified).reset_index()
      fig = plt.figure(figsize = (15, 5))
      newDf.rename(columns = {'index':'kecamatan','kecamatan':'jumlah'}, inplace = True)
      plt.bar(newDf['jumlah'], newDf['kecamatan'], color ='pink',width = 0.4)
      plt.xticks(size=12,rotation = "vertical")
      plt.yticks(size=12)
      plt.title('Sebaran Jenis Usaha yang ada di wilayah jakarta pusat ', size=16)
      plt.ylabel('jumlah jenis usaha', size=14)
      plt
    </py-script>
    <py-script output="jakarta_selatan">
      data = df['wilayah'].unique()
      specified = df.loc[df['wilayah'] == 'Jakarta Selatan']
      newDf = pd.DataFrame(specified).reset_index()
      fig = plt.figure(figsize = (15, 5))
      newDf.rename(columns = {'index':'kecamatan','kecamatan':'jumlah'}, inplace = True)
      plt.bar(newDf['jumlah'], newDf['kecamatan'], color ='pink',width = 0.4)
      plt.xticks(size=12,rotation = "vertical")
      plt.yticks(size=12)
      plt.title('Sebaran Jenis Usaha yang ada di wilayah jakarta selatan ', size=16)
      plt.ylabel('jumlah jenis usaha', size=14)
      plt
    </py-script>
    <py-script output="jakarta_timur">
      data = df['wilayah'].unique()
      specified = df.loc[df['wilayah'] == 'Jakarta Timur']
      newDf = pd.DataFrame(specified).reset_index()
      fig = plt.figure(figsize = (15, 5))
      newDf.rename(columns = {'index':'kecamatan','kecamatan':'jumlah'}, inplace = True)
      plt.bar(newDf['jumlah'], newDf['kecamatan'], color ='pink',width = 0.4)
      plt.xticks(size=12,rotation = "vertical")
      plt.yticks(size=12)
      plt.title('Sebaran Jenis Usaha yang ada di wilayah jakarta timur ', size=16)
      plt.ylabel('jumlah jenis usaha', size=14)
      plt
    </py-script>
    <py-script output="jakarta_utara">
      data = df['wilayah'].unique()
      specified = df.loc[df['wilayah'] == 'Jakarta Utara']
      newDf = pd.DataFrame(specified).reset_index()
      fig = plt.figure(figsize = (15, 5))
      newDf.rename(columns = {'index':'kecamatan','kecamatan':'jumlah'}, inplace = True)
      plt.bar(newDf['jumlah'], newDf['kecamatan'], color ='pink',width = 0.4)
      plt.xticks(size=12,rotation = "vertical")
      plt.yticks(size=12)
      plt.title('Sebaran Jenis Usaha yang ada di wilayah jakarta utara ', size=16)
      plt.ylabel('jumlah jenis usaha', size=14)
      plt
    </py-script>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <title>Transport Document for Dangerous Goods</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container">
        <h1>ADR TRANSPORTDOKUMENT FARLIG GODS</h1>

        <div class="section">
            <table class="table3">
                <tr>
                    <th class="date">Dato:</th>
                    <td>
                        <?php echo isset($_GET['date']) ? $_GET['date'] : ''; ?>
                    </td>
                </tr>
            </table>
            <table class="table">
                <tr>
                    <th colspan="3" style="background-color:grey; color:white; padding:3px 0 3px 0;">
                        <center> Avsender, transportør og mottaker: </center>
                    </th>
                </tr>
                <tr>
                    <td class="text1">Mottaker</td>
                    <td class="text1">Transportor</td>
                    <td class="text1">Avsender</td>
                </tr>
                <tr>
                    <th class="weight">Navn:
                        <?php echo isset($_GET['name']) ? $_GET['name'] : ''; ?><br>
                        <br>Adresse:
                        <?php echo isset($_GET['address']) ? $_GET['address'] : ''; ?>
                    </th>
                    <td class="text3">DB Schenker AS</td>
                    <td class="text3">Norsk Gass AS
                        <br>Ullandhaugveien 25,<br>4019 Stavanger, Norge</br>
                    </td>
                </tr>
                <tr>
                    <td colspan=2>
                        <div class="round">
                            <span class="photos"><img src="Images/1.jpg" alt="," width="100" height="100" class="image2"></span>
                            <span class="photos"><img src="Images/1g.jpg" alt="1g" width="100" height="100" class="image2"></span>
                        </div>
                    </td>
                    <td><img src="Images/photo.png" alt="ng" width="120" height="100" class="image"></td>
                </tr>
                <th colspan="2" class="value">1.1.3.6: Total mengde for hver transportkategori 3 :
                    <?php echo isset($_GET['totalQuantity']) ? $_GET['totalQuantity'] : ''; ?><br>
                    1.1.3.6: Beregnet verdi for hver transportkategori 3:
                    <?php echo isset($_GET['calculatedValue']) ? $_GET['calculatedValue'] : ''; ?><br>
                    1.1.3.6: Sum av kalkulert poengverdi:
                    <?php echo isset($_GET['sum']) ? $_GET['sum'] : ''; ?><br>
                    Den mest restriktive tunnellkode: C/E
                </th>
                <td class="text2">signatur:</td>
                </tr>
            </table>
            <table class="table2">
                <tr>
                    <th colspan="3" style="background-color:grey; color:white; padding:3px 0 3px 0 ;">
                        <center> Varer. </center>
                    </th>
                </tr>
                <tr>
                    <td class="text1">Kolli mengde</td>
                    <td class="text1">Detalj oversikt for kolli</td>
                    <td class="text1">Masse</td>
                </tr>
                <tr>
                    <td class="text3">1 x Flaske</td>
                    <td class="text3">UN 1070 DINITROGENOKSID, 2.2(5.1), C/E</td>
                    <td class="text3">
                        <?php echo isset($_GET['totalQuantity']) ? $_GET['totalQuantity'] : ''; ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="buttoncontainer">
    <button id="printButton" class="exclude-print">Print Form</button>
    </div>
    <script>
        document.getElementById('printButton').addEventListener('click', function () {
            window.print();
        });
    </script>
</body>
</html>

<!DOCTYPE html>
<html>

<head>
    <title>Transport Document for Dangerous Goods</title>
    <style>
        body {

            font-family:  sans-serif;
            background-image: url('page.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            margin-top: 0;
        }
        

        .container {
            width: 94.5%;
            margin: 0 auto;
            margin-top: 55px;
            margin-bottom: 40px;

        }

        .container h1 {
            text-align: center;
            font-size: 1.5rem;
            
        }

        .section {
            margin-top: 20px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            border: 2px solid #000;
            padding: 12px;
            
        }


        /* Style for printing */
        @media print {
            /* Hide the entire form and everything inside it when printing */


            /* Hide any elements you don't want to print */
            .exclude-print {
                display: none;
            }
        }

        /* Additional print styles to remove URL and page title */
        @media print {

            /* Remove the default page margin */
            @page {
                margin: 0;
            }

            /* Remove the page title */
            body::after {
                content: none;
            }
        }
        .photos{
            display: flex;
            flex-direction: row;
        }
        .image
        {
            display: block;
            margin: auto;
        }
        .row{
            
        }
        .value{
            font-size: 0.8rem;
            font-weight: normal;
            text-align: left;
        }
        .weight{
            font-weight: normal;
            text-align: left;
        }
        .text1{
            font-weight: bold;
            text-align: center;
            margin: auto;
            
        }
        .text2{
            text-align: top;
        }
        .text3{
            text-align: center;
        }
        .round{
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }
        .image2{
            margin: 0px 50px;
            padding: 0px 0px;
            text-decoration: none;
        }
        .table2 {
            width: 100%;
            border-collapse: collapse;
        }

        .table2 th,
        .table2 td {
            border: 2px solid #000;
            padding: 15px;
            
        }
        .table3 {
            width: 50%;
            border-collapse: collapse;
        }

        .table3 th,
        .table3 td {
            border: 2px solid #000;
            padding: 15px;
            text-align: left;
            
        }
    </style>
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
                   <td  class="text1">Mottaker</td> 
                    <td class="text1">Transportor</td>
                    <td class="text1">Avsender</td>
                </tr>
                <tr >
                    <th class="weight">Navn:
                        <?php echo isset($_GET['name']) ? $_GET['name'] : ''; ?><br>
                        <br>Adresse:
                        <?php echo isset($_GET['address']) ? $_GET['address'] : ''; ?></br>
                    </th>
                    <td class="text3">DB Schenker AS</td>
                    <td class="text3">Norsk Gass AS
                        <br>Ullandhaugveien 25,<br>4019 Stavanger, Norge</br>
                    </td>
                </tr>
                <tr>

                    <td colspan=2>
                        <div class="round">
                        <span class="photos"><img src="1.jpg" alt="," width="100" height="100" class="image2"></span>
                   
                        <span class="photos"> <img src="1g.jpg" alt="1g" width="100" height="100" class="image2"></span>
                        </div>
                    </td>

                    <td><img src="photo.png" alt="ng" width="120" height="100" class="image"></td>
                </tr>
                <th colspan="2" class="value">1.1.3.6: Total mengde for hver transportkategori 3 :
                    <?php echo isset($_GET['totalQuantity']) ? $_GET['totalQuantity'] : ''; ?><br>
                    1.1.3.6: Beregnet verdi for hver transportkategori 3:
                    <?php echo isset($_GET['calculatedValue']) ? $_GET['calculatedValue'] : ''; ?></br>
                    1.1.3.6: Sum av kalkulert poengverdi:
                    <?php echo isset($_GET['sum']) ? $_GET['sum'] : ''; ?></br>
                    Den mest restriktive tunnellkode: C/E</br>
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
    

        <button id="printButton" class="exclude-print">Print Form</button>
        <script>
            document.getElementById('printButton').addEventListener('click', function () {
                window.print();
            });
        </script>
</body>

</html>
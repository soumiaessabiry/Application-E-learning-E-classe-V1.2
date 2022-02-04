<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment </title>
    <link rel="stylesheet" href="stylepa.css">
    <link rel="stylesheet" href="styleboot/css/bootstrap.min.css">
    <link rel="stylesheet" href="styleboot/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <script src="styleboot/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap"><!-- col1-->
            <?php include('sidebar.php');?>
            <div class="col "><!-- col2-->
                <?php include 'navbar.php' ?>
                <div class="d-flex justify-content-between mt-3   ">
                    <div >
                        <a href="indexstudent.php " class="fs-3 fw-bold me-3">Payment  List</a>
                    </div>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                        <i class="bi bi-chevron-expand fs-4 fw-bold" style="color:#00C1FE;"></i>
                        
                    </div>
                </div>
                <!-- table-->
                <div class="table-responsive-md">
               
                    <?php 
                       //tableau assausitif
                        $payment=array(
                            array (
                                'Name'=>'Karthi',
                                'Payment Schedule'=>'First',
                                'Bill Number'=>00012223,
                                'Amount Paid'=>'DHS 100,000',
                                'Balance amount'=>'DHS 500,000',
                                'Date'=>'05-Jan, 2022 ',
                                ),
                            array (
                                'Name'=>'Karthi',
                                'Payment Schedule'=>'First',
                                'Bill Number'=>00012223,
                                'Amount Paid'=>'DHS 100,000',
                                'Balance amount'=>'DHS 500,000',
                                'Date'=>'05-Jan, 2022 ',
                                ), 
                            array (
                                'Name'=>'Karthi',
                                'Payment Schedule'=>'First',
                                'Bill Number'=>00012223,
                                'Amount Paid'=>'DHS 100,000',
                                'Balance amount'=>'DHS 500,000',
                                'Date'=>'05-Jan, 2022 ',
                                ), 
                            array (
                                'Name'=>'Karthi',
                                'Payment Schedule'=>'First',
                                'Bill Number'=>00012223,
                                'Amount Paid'=>'DHS 100,000',
                                'Balance amount'=>'DHS 500,000',
                                'Date'=>'05-Jan, 2022 ',
                                ), 
                            );

                        ?>
                    
                       <table  width="100%" style="height: 352px; text-align:center" class="table table-hover bg-light " >
                            <tr class="bg-light">
                                <td>Name</td>
                                <td>Payment Schedule</td>
                                <td>Bill Number</td>
                                <td>Amount Paid</td>
                                <td>Balance amount</td>
                                <td>Date</td>
                            </tr>
                            <tbody style="height: 352px; text-align:center">
                                <?php 
                                        foreach ($payment as $key => $p) {
                                ?>
                                    <tr style=" border-bottom-width: 11px;" >
                                    <td><?php echo$p['Name'];?> </td>
                                    <td><?php echo$p['Payment Schedule']; ?></td>
                                    <td><?php echo$p['Bill Number']; ?></td>
                                    <td><?php echo$p['Amount Paid']; ?></td>
                                    <td><?php echo$p['Balance amount']; ?></td>
                                    <td><?php echo$p['Date']; ?></td>
                                    <td class="text-primary align-middle">
                                        <i class="far fa-eye text-info"></i>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                   


            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>

</html>
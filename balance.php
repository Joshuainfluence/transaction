<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <link rel="stylesheet" href="style.css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,300,regular,500,600,700,800,900,200italic,300italic,italic,500italic,600italic,700italic,800italic,900italic"
        rel="stylesheet" />
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                Bank
            </div>
            <div class="mail">
                
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Hey Samuel Johnson: Bank of America. <br>Account Type: Checking Account Routing
                    <br>Number:
                    <br>Account Number <br>
                    <span style="color: orange;">Wells Fargo bank, N.A</span> is sending you $3,169,000.00
                </h2>
                <br>

                <div class="border">
                    <div class="info">
                        <div class="p">
                            <div class="purple">

                            </div>
                            <div class="writeup">
                                Wells Fargo Bank, N.A made a $3,169,000.00 transfer
                            </div>
                        </div>
                        <div class="date">
                            Jun 14, 12:00
                        </div>
                    </div>

                    <div class="transaction">
                        <div class="trans">
                            Transaction Progress
                        </div>
                        <div class="score">
                            97%
                        </div>
                    </div>

                    <div class="progressbar">
                        <div class="bar"></div>
                    </div>


                    <div class="main">
                        <div class="for">
                            <div class="orange">

                            </div>

                            <div class="foreign">
                                Foreign Transaction Fees
                            </div>
                        </div>

                        <div class="unresolved">
                            Unresolved
                        </div>
                    </div>

                    <div class="transup">
                        Transaction Unresolve Your transfer of $3,169,000.00 USD has been fully confirmed and is now in the final stage of processing for international transfer. A part of regulatory compliance and conversion tools between our crypto currency exchange international banking !
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- <script>
        const bar = document.querySelector('.bar');
        const score = document.querySelector('.score');
    
        let progress = 0;
    
        const interval = setInterval(() => {
            if (progress <= 100) {
                bar.style.width = progress + '%';
                score.textContent = progress + '%';
                progress++;
            } else {
                clearInterval(interval);
            }
        }, 50); // Adjust speed here (50ms per step)
    </script> -->



    <script>
        const bar = document.querySelector('.bar');
        const score = document.querySelector('.score');

        let progress = 0;

        const interval = setInterval(() => {
            if (progress <= 97) {
                bar.style.width = progress + '%';
                score.textContent = progress + '%';

                // Change color when progress is >= 90
                if (progress >= 90) {
                    bar.style.backgroundColor = 'red';
                } else {
                    bar.style.backgroundColor = '#4caf50'; // green
                }

                progress++;
            } else {
                clearInterval(interval);
            }
        }, 50);
    </script>


</body>

</html>
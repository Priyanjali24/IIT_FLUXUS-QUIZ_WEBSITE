<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="main">
        <header class="header">
            <a href="#" class="logo">Quiz</a>

            <nav class="navbar">
                <a href="#" class="active">Home</a>
                <a href="#">About</a>
                <a href="#">Services</a>
                <a href="#">Contact</a>
            </nav>
        </header>
        <div class="container">
            <section class="quiz-section">
                <div class="quiz-box">
                    <h1>FLUXUS Quiz</h1>
                    <div class="quiz-header">
                        <span>Quiz Website Tutorial</span>
                        <span class="header-score">Score: 0 / 5</span>
                    </div>
                    <h2 class="question-text">What does HTML stands for?</h2>
                    <div class="option-list">
                        <!-- <div class="option">
                            <span>A. Hyper Text Markup Language</span>
                        </div>
                        <div class="option">
                            <span>B. Hyper Text Multi Language</span>
                        </div>
                        <div class="option">
                            <span>C. Hyper Text Multiple Language</span>
                        </div>
                        <div class="option">
                            <span>D. Home Text Multi Language</span>
                        </div> -->
                    </div>
                    <div class="quiz-footer">
                        <span class="question-total">1 of 5 Questions</span>
                        <button class="next-btn">Next</button>
                    </div>

                </div>
                <div class="result-box">
                    <h2>Quiz Result!</h2>
                    <div class="percentage-container">
                        <div class="circular-progress">
                            <span class="progress-value">0%</span>
                        </div>
                        <span class="score-text">Your Score 0 out of 5</span>
                    </div>
                    <div class="buttons">
                        <button class="TryAgain-btn">Try Again</button>
                        <button class="goHome-btn">Go To Home</button>
                    </div>


                </div>

            
            </section>
        <section class="home">
            <div class="home-content">
                <h1>Quiz Website</h1>
                <p>Online quiz maker is a modern-day tool that has been </br>smartly
                     designed to meet all the basic as well as
                     advanced</br> requirements of creating a quiz.</p>
                <a href="login.php"><button class="start-btn" >Login page</button></a>
                <a href="signup.php"><button class="start-btn">New Account</button></a>
            </div>
        </section>
      </div>  
    </main>

    

    <script src="questions.js"></script>
    <script src="script.js"></script>
</body>
</html>
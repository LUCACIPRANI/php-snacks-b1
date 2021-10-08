<?php
    // container snack1 
    $games = [
        [
            'localTeam' => 'GoldenState Warriors',
            'visitingTeam' => 'Brooklyn Nets',
            'localTeamPoints' => 110,
            'visitingTeamPoints' => 103,
        ],
        [
            'localTeam' => 'LosAngeles Lakers',
            'visitingTeam' => 'Dallas Mavericks',
            'localTeamPoints' => 101,
            'visitingTeamPoints' => 97,
        ],
        [
            'localTeam' => 'Washington Wizards',
            'visitingTeam' => 'Milwaukee Bucks',
            'localTeamPoints' => 118,
            'visitingTeamPoints' => 121,
        ],
        [
            'localTeam' => 'Orlando Magic',
            'visitingTeam' => 'Miami Heats',
            'localTeamPoints' => 98,
            'visitingTeamPoints' => 96,
        ],
        [
            'localTeam' => 'Portland Trail blazers',
            'visitingTeam' => 'Boston Celtics',
            'localTeamPoints' => 110,
            'visitingTeamPoints' => 112,
        ],
        [
            'localTeam' => 'Charlotte Hornets',
            'visitingTeam' => 'New Horleans Pelicans',
            'localTeamPoints' => 98,
            'visitingTeamPoints' => 100,
        ],
        [
            'localTeam' => 'Indiana Pacers',
            'visitingTeam' => 'Phoenix Suns',
            'localTeamPoints' => 110,
            'visitingTeamPoints' => 112,
        ],
    ];

    // container snack2
    $getName = $_GET['name'];
    $minNameLng = strlen($getName);
    $getAge = $_GET['age'];
    $getMail = $_GET['mail'];

?>
<div class="main-container">
    <div class="container-snack1">
        <h1>Games results: </h1>
        <?php
        for($i = 0; $i < count($games); $i++) {
            echo '<h2>' . ($games[$i]['localTeam']) . ' - ' . ($games[$i]['visitingTeam']) . ' | ' . ($games[$i]['localTeamPoints']) . '-' . ($games[$i]['visitingTeamPoints']) . '<br/>' . '<h2/>';
        }
        ?>
    </div>
    
    <div class="container-snack2">
        <h1>Getting: </h1>
        <?php
        if(empty($getName)){
            echo 'Error';
        } else{
            if($minNameLng >= 4){
                echo '<h2>' . 'The name is: ' . $getName . '</h2>';
            }
        }
    
        if(empty($getAge)){
            echo 'Error Age';
        } else {
            if(is_numeric($getAge)){
                echo '<h2>' . 'The age is: ' . $getAge . '</h2>';
            }
        }
    
        if(empty($getMail)){
            echo 'Error';
        } else{
            if((strpos($getMail, '@')) && (strpos($getMail, '.'))){
                echo '<h2>' . 'The email is: ' . $getMail . '</h2>';
            } else{
                echo 'mail invalid';
            }
        }
    
        ?>
    </div>
</div>

<style>
    body{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    .main-container{
        height: 80vh;
        width: 100%;
    }
    .container-snack1{
        width: 40%;
        float: left;
        margin: 3%;
        padding: 2% 5%;
        background-image: url('https://c4.wallpaperflare.com/wallpaper/296/615/731/nba-basketball-wallpaper-thumb.jpg');
        background-size: cover;
        border-radius: 8px;
    }

    .container-snack2{
        float: left;
        width: 20%;
        margin: 3%;
        padding: 2% 5%;
        background-color: lightblue;
        border-radius: 8px;
    }
</style>
<?php
class AcceptData {
    private $pdo;

    public function __construct() {
        $this->pdo = new PDO("mysql:host=127.0.0.1;dbname=studata;charset=utf8", "root", "admin@123");
    }

    public function showSingle($index) {
        $stmt = $this->pdo->prepare("SELECT * FROM admission_form LIMIT 1 OFFSET :offset");
        $stmt->bindValue(':offset', (int)$index, PDO::PARAM_INT);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $total = $this->pdo->query("SELECT COUNT(*) FROM admission_form")->fetchColumn();

        echo '<!DOCTYPE html><html><head>
                <title>Admission Details</title>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
                <link rel="stylesheet" href="form.css">
            </head><body class="body">';

        echo '<form><div class="container">';
        echo '<h3 class="up display-5 text-center text-black border mt-1 border-dark border-5 mb-3 rounded-pill bg-light pos wid">Admission Form ('.($index+1).')</h3>';

        if ($row) {
            // Fields: Name + Mobile
            echo '<div class="row">';
            echo '<div class="la col-sm-3"><input readonly value="'.$row['fname'].'" class="inpu mar col-sm-12 bg-transparent border-white border-top-0 border-start-0 mt-2 border-end-0 text-white wid" placeholder="First name"></div>';
            echo '<div class="laa col-sm-3"><input readonly value="'.$row['mname'].'" class="inpu mar col-sm-12 bg-transparent border-white border-top-0 border-start-0 mt-2 border-end-0 text-white wid" placeholder="Middle name"></div>';
            echo '<div class="raa col-sm-3"><input readonly value="'.$row['lname'].'" class="inpu mar col-sm-12 bg-transparent border-white border-top-0 border-start-0 mt-2 border-end-0 text-white wid" placeholder="Last name"></div>';
            echo '<div class="ra col-sm-3"><input readonly value="'.$row['mobile'].'" class="inpu mar col-sm-12 bg-transparent border-white border-top-0 border-start-0 mt-2 border-end-0 text-white wid" placeholder="Mobile no"></div>';
            echo '</div>';

            // Email + Gender
            echo '<div class="row mt-3">';
            echo '<div class="la col-sm-6"><input readonly value="'.$row['email'].'" class="inpu mar col-sm-12 bg-transparent border-white border-top-0 border-start-0 border-end-0 text-white wid" placeholder="Email Address"></div>';
            echo '<div class="ra col-sm-6 text-white fw-bold">Select Gender:<br>';
            echo '<input disabled type="radio" '.($row['gender']=='male'?'checked':'').'>&nbsp;male ';
            echo '<input disabled type="radio" '.($row['gender']=='female'?'checked':'').'>&nbsp;female ';
            echo '<input disabled type="radio" '.($row['gender']=='other'?'checked':'').'>&nbsp;other </div>';
            echo '</div>';

            // Education, Language, Percentage, Pass year
            echo '<div class="row mt-4">';
            echo '<div class="la col-lg-3"><select disabled class="sel mar col-sm-12 bg-transparent border-white text-dark wid"><option>'.$row['education'].'</option></select></div>';
            echo '<div class="laa col-lg-3"><select disabled class="sel mar col-sm-12 bg-transparent border-white text-dark wid"><option>'.$row['languagee'].'</option></select></div>';
            echo '<div class="raa col-lg-3"><select disabled class="sel mar col-sm-12 bg-transparent border-white text-dark wid"><option>'.$row['percentage'].'</option></select></div>';
            echo '<div class="ra col-lg-3"><select disabled class="sel mar col-sm-12 bg-transparent border-white text-dark wid"><option>'.$row['passyear'].'</option></select></div>';
            echo '</div>';

            // Address
            echo '<div class="row mt-4">';
            echo '<div class="la col-sm-3"><input readonly value="'.$row['wing'].'" class="inpu mar col-sm-12 bg-transparent border-white border-top-0 border-start-0 border-end-0 text-white wid" placeholder="Wing/flat no"></div>';
            echo '<div class="laa col-sm-3"><input readonly value="'.$row['building'].'" class="inpu mar col-sm-12 bg-transparent border-white border-top-0 border-start-0 border-end-0 text-white wid" placeholder="Building"></div>';
            echo '<div class="raa col-sm-3"><input readonly value="'.$row['areas'].'" class="inpu mar col-sm-12 bg-transparent border-white border-top-0 border-start-0 border-end-0 text-white wid" placeholder="Area"></div>';
            echo '<div class="ra col-sm-3"><input readonly value="'.$row['city'].'" class="inpu mar col-sm-12 bg-transparent border-white border-top-0 border-start-0 border-end-0 text-white wid" placeholder="City"></div>';
            echo '</div>';

            echo '<div class="row mt-4">';
            echo '<div class="la col-sm-6"><input readonly value="'.$row['landmark'].'" class="inpu mar col-sm-12 bg-transparent border-white border-top-0 border-start-0 border-end-0 text-white wid" placeholder="Landmark"></div>';
            echo '<div class="ra col-sm-6"><input readonly value="'.$row['pincode'].'" class="inpu mar col-sm-12 bg-transparent border-white border-top-0 border-start-0 border-end-0 text-white wid" placeholder="Pincode"></div>';
            echo '</div>';

            // DOB, Blood group, Country, State
            echo '<div class="row mt-4">';
            echo '<div class="la col-lg-3"><input readonly value="'.$row['dob'].'" type="date" class="inpu mar col-sm-12 bg-transparent border-white border-top-0 border-start-0 border-end-0 text-white wid"></div>';
            echo '<div class="la col-lg-3"><select disabled class="sel mar col-sm-12 bg-transparent border-white text-dark wid"><option>'.$row['bloodrp'].'</option></select></div>';
            echo '<div class="ra col-lg-3"><select disabled class="sel mar col-sm-12 bg-transparent border-white text-dark wid"><option>'.$row['country'].'</option></select></div>';
            echo '<div class="ra col-lg-3"><select disabled class="sel mar col-sm-12 bg-transparent border-white text-dark wid"><option>'.$row['state'].'</option></select></div>';
            echo '</div>';

            // Reference and Image
            echo '<div class="row mt-5">';
            echo '<div class="la col-sm-6"><input readonly value="'.$row['referencee'].'" class="inpu mar col-sm-12 bg-transparent border-white border-top-0 border-start-0 border-end-0 text-white wid" placeholder="Reference By"></div>';
            echo '<div class="ra col-sm-6 text-white">Photo:<br><img src="'.$row['choose'].'" class="mt-2 border rounded" width="100" height="100"></div>';
            echo '</div>';

            // Navigation
            echo '<div class="dw col-sm-12 mt-4 text-center">';
            if ($index > 0) {
                echo '<a href="?index='.($index-1).'" class="btn btn-light me-2">Previous</a>';
            }
            if ($index < $total - 1) {
                echo '<a href="?index='.($index+1).'" class="btn btn-light">Next</a>';
            }
            echo '</div>';
        } else {
            echo '<h4 class="text-white text-center">No record found</h4>';
        }

        echo '</div></form></body></html>';
    }
}

$index = isset($_GET['index']) ? intval($_GET['index']) : 0;
$app = new AcceptData();
$app->showSingle($index);

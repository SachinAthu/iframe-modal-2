<?php
    require __DIR__ . '/vendor/autoload.php';
    use sachinathu\IframeModal\Index;

    $iframe_url = 'https://www.onepay.lk/';
    $iframe_title = 'Onepay Merchant Panel';
    
    if(isset($_POST['submit'])) {
        if(array_key_exists('submit', $_POST)) {
            $iframe = new Index($iframe_url, $iframe_title);
            $iframe->showIframe();
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet"> 

    <link href="./style.css" rel="stylesheet">
    <title>Iframe Demo</title>
</head>
<body>
    <div class="m-5">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <input class="btn btn-primary" type="submit" name="submit" value="Start" />    
        </form>
        
        <!-- <button class="btn btn-primary" type="button" id="start-btn" data-bs-toggle="modal" data-bs-target="#iframeModal">
            Start
        </button> -->

        <!-- <button class="btn btn-primary" type="button" id="start-btn" onclick="openModal()">
            Start
        </button> -->

        <!-- <div id="iframeModal">
            <div class="iframe-modal-content">
                <div class="iframe-modal-header"></div>
                <div class="iframe-modal-body"></div>
                <div class="iframe-modal-footer"></div>
            </div>
        </div> -->

        <!-- Modal -->
        <!-- <div class="modal fade" id="iframeModal" tabindex="-1" aria-labelledby="iframeModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="iframeModalLabel">IFrame</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <iframe 
                            src="https://www.onepay.lk/" 
                            title="Onepay Merchant Panel"
                        ></iframe>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div> -->
    </div>

    <script>
        function openModal() {
            // console.log(document.body.innerHTML);

            document.head.innerHTML += `
                <style>
                    #iframeModal .modal-dialog {
                        max-width: 95vw !important;
                        width: 90vw !important;
                        height: 90vh !important;
                    }
                    #iframeModal .modal-dialog .modal-content {
                        height: 100% !important;
                    }
                    #iframeModal iframe {
                        width: 100%;
                        height: 100%;
                    }
                </style>
            `;

            document.body.innerHTML += `
            <div class="modal fade" id="iframeModal" tabindex="-1" aria-labelledby="iframeModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="iframeModalLabel">IFrame</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <iframe 
                                src="https://www.onepay.lk/" 
                                title="Onepay Merchant Panel"
                            ></iframe>
                        </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            `;

            $('#iframeModal').modal('show');
            
        }

    </script>

    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
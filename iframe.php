<?php

namespace IframeModalPackage;

class Iframe {
    private $url;
    private $title;

    public function __construct($url, $title) {
        $this->url = $url;
        $this->title = $title;
    }

    function __destruct() {
        echo 'Destruct called';
    }

    function showIframe() {
        echo "
            <script>
                setTimeout(() => {
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
                    <div class='modal fade' id='iframeModal' tabindex='-1' aria-labelledby='iframeModalLabel' aria-hidden='true'>
                        <div class='modal-dialog'>
                            <div class='modal-content'>
                                <div class='modal-header'>
                                    <h5 class='modal-title' id='iframeModalLabel'>$this->title</h5>
                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                </div>
        
                                <div class='modal-body'>
                                    <iframe 
                                        src='$this->url' 
                                        title='$this->title'
                                    ></iframe>
                                </div>
                                
                                <div class='modal-footer'>
                                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    `;
    
                    $('#iframeModal').modal('show');
                }, 1000);
            </script>
        ";
    }

}
<?php

require 'vendor/autoload.php';

$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
$reader->setReadDataOnly(TRUE);
$inputFileName = $_FILES['data'];
$spreadsheet = $reader->load($inputFileName['tmp_name']);

$sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);

$arrayError = [];

$servername = "localhost";
$username = "root";

// Create connection
$conn = new mysqli($servername, $username);

foreach ($sheetData as $key => $value) {
    if ($key !== 1) {
        //test question 1
        if ($value['B'] === '1') {
            //test question 2
            if($value['C'] === '1'){
                //goes to question 3
                if ($value['D'] === 'NULL') {
                    array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 3 nula');
                }

                if ($value['E'] === '1') {
                    //goes to question 5
                    if ($value['F'] === '1' ) {
                        //goes to question 8
                        if ($value['I'] === '1'){
                            //goest to question 9
                            if($value['J'] === 'NULL'){
                                array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 10 nula');
                            }
                            if($value['K'] === 'NULL'){
                                array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 11 nula');
                            }

                            if($value['L'] === 'NULL'){
                                array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 12 nula');
                            }

                            if($value['M'] === 'NULL'){
                                array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 13 nula');
                            }

                            if($value['N'] === 'NULL'){
                                array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 14 nula');
                            }

                            if($value['O'] === 'NULL'){
                                array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 15 nula');
                            }
                            if($value['P'] === 'NULL'){
                                array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 11 nula');
                            }
                            if($value['Q'] === 'NULL'){
                                array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 12 nula');
                            }
                        } else if ($value['I'] === '2') {
                            //goes to question 10
                            if($value['O'] === 'NULL'){
                                array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 15 nula');
                            }
                            if($value['P'] === 'NULL'){
                                array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 11 nula');
                            }
                            if($value['Q'] === 'NULL'){
                                array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 12 nula');
                            }

                        } else {
                            array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 9 nula');
                        }
                    } else if ($value['F'] === '2' || $value['F'] === '3') {
                        //goes to question 6
                        if ($value['G'] === 'NULL') {
                            array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 6 nula');
                        }  

                        if($value['H'] === '1') {
                            //goes to question 8 
                            if ($value['I'] === '1'){
                                //goest to question 9
                                if($value['J'] === 'NULL'){
                                    array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 10 nula');
                                }
                                if($value['K'] === 'NULL'){
                                    array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 11 nula');
                                }

                                if($value['L'] === 'NULL'){
                                    array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 12 nula');
                                }

                                if($value['M'] === 'NULL'){
                                    array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 13 nula');
                                }

                                if($value['N'] === 'NULL'){
                                    array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 14 nula');
                                }

                                if($value['O'] === 'NULL'){
                                    array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 15 nula');
                                }
                                if($value['P'] === 'NULL'){
                                    array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 11 nula');
                                }
                                if($value['Q'] === 'NULL'){
                                    array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 12 nula');
                                }
                            } else if ($value['I'] === '2') {
                                //goes to question 10
                                if($value['O'] === 'NULL'){
                                    array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 15 nula');
                                }
                                if($value['P'] === 'NULL'){
                                    array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 11 nula');
                                }
                                if($value['Q'] === 'NULL'){
                                    array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 12 nula');
                                }
                            }
                        } else if ($value['H'] === '2'){
                            //teste question 10
                            if($value['O'] === 'NULL'){
                                array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 15 nula');
                            }
                            if($value['P'] === 'NULL'){
                                array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 11 nula');
                            }
                            if($value['Q'] === 'NULL'){
                                array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 12 nula');
                            }
                        }

                    } else {
                        array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 5 nula');
                    }

                } else if ($value['E'] === '2' ) {
                    //goes to question 6
                    if ($value['G'] === 'NULL') {
                        array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 6 nula');
                    }  

                    if($value['H'] === '1') {
                        //goes to question 8 
                        if ($value['I'] === '1'){
                            //goest to question 9
                            if($value['J'] === 'NULL'){
                                array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 10 nula');
                            }
                            if($value['K'] === 'NULL'){
                                array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 11 nula');
                            }

                            if($value['L'] === 'NULL'){
                                array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 12 nula');
                            }

                            if($value['M'] === 'NULL'){
                                array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 13 nula');
                            }

                            if($value['N'] === 'NULL'){
                                array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 14 nula');
                            }

                            if($value['O'] === 'NULL'){
                                array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 15 nula');
                            }
                            if($value['P'] === 'NULL'){
                                array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 11 nula');
                            }
                            if($value['Q'] === 'NULL'){
                                array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 12 nula');
                            }
                        } else if ($value['I'] === '2') {
                            //goes to question 10
                            if($value['O'] === 'NULL'){
                                array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 15 nula');
                            }
                            if($value['P'] === 'NULL'){
                                array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 11 nula');
                            }
                            if($value['Q'] === 'NULL'){
                                array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 12 nula');
                            }
                        }
                    } else if ($value['H'] === '2'){
                        //teste question 10
                        if($value['O'] === 'NULL'){
                            array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 15 nula');
                        }
                        if($value['P'] === 'NULL'){
                            array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 11 nula');
                        }
                        if($value['Q'] === 'NULL'){
                            array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 12 nula');
                        }
                    }

                } else {
                    array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 3 nula');
                }

            } else if ($value['C'] === '2') {
                //test question 7
                if($value['H'] === '1') {
                    //goes to question 8 
                    if ($value['I'] === '1'){
                        //goest to question 9
                        if($value['J'] === 'NULL'){
                            array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 10 nula');
                        }
                        if($value['K'] === 'NULL'){
                            array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 11 nula');
                        }

                        if($value['L'] === 'NULL'){
                            array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 12 nula');
                        }

                        if($value['M'] === 'NULL'){
                            array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 13 nula');
                        }

                        if($value['N'] === 'NULL'){
                            array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 14 nula');
                        }

                        if($value['O'] === 'NULL'){
                            array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 15 nula');
                        }
                        if($value['P'] === 'NULL'){
                            array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 11 nula');
                        }
                        if($value['Q'] === 'NULL'){
                            array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 12 nula');
                        }
                    } else if ($value['I'] === '2') {
                        //goes to question 10
                        if($value['O'] === 'NULL'){
                            array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 15 nula');
                        }
                        if($value['P'] === 'NULL'){
                            array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 11 nula');
                        }
                        if($value['Q'] === 'NULL'){
                            array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 12 nula');
                        }
                    }
                } else if ($value['H'] === '2'){
                    //teste question 10
                    if($value['O'] === 'NULL'){
                        array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 15 nula');
                    }
                    if($value['P'] === 'NULL'){
                        array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 11 nula');
                    }
                    if($value['Q'] === 'NULL'){
                        array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 12 nula');
                    }
                }
            } else {
                //erro
                array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 2 nula');
            }
            
        } else {
            if($value['H'] === '1') {
                //goes to question 8 
                if ($value['I'] === '1'){
                    if($value['J'] === 'NULL'){
                        array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 10 nula');
                    }
                    if($value['K'] === 'NULL'){
                        array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 11 nula');
                    }

                    if($value['L'] === 'NULL'){
                        array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 12 nula');
                    }

                    if($value['M'] === 'NULL'){
                        array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 13 nula');
                    }

                    if($value['N'] === 'NULL'){
                        array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 14 nula');
                    }
                    if($value['O'] === 'NULL'){
                        array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 10 nula');
                    }
                    if($value['P'] === 'NULL'){
                        array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 11 nula');
                    }
                    if($value['Q'] === 'NULL'){
                        array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 12 nula');
                    }
                } else if ($value['I'] === '2') {
                    //goes to question 10
                    if($value['O'] === 'NULL'){
                        array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 10 nula');
                    }
                    if($value['P'] === 'NULL'){
                        array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 11 nula');
                    }
                    if($value['Q'] === 'NULL'){
                        array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 12 nula');
                    }
                }
            } else if ($value['H'] === '2'){
                //teste question 10
                if($value['O'] === 'NULL'){
                    array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 10 nula');
                }
                if($value['P'] === 'NULL'){
                    array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 11 nula');
                }
                if($value['Q'] === 'NULL'){
                    array_push($arrayError, 'Ocorreu um erro no id: ' .$value['A']. ' perguta 12 nula');
                }
            }
        }
        $sql = "INSERT INTO" ." test.prova". "(v1, v2, v3, v4, v5, v6, v7, v8, v9, v10, v11, v12, v13, v14, v15, v16) VALUES(". $value['B']. ",". $value['C']. ",". $value['D']. ",". $value['E']. ",". $value['F']. ",". $value['G']. ",". $value['H']. ",". $value['I']. ",". $value['J']. ",". $value['K']. ",". $value['L']. ",". $value['M']. ",". $value['N']. ",". $value['O']. ",". $value['P']. ",". $value['Q'].")";
        mysqli_query($conn, $sql);
    }
}
mysqli_close($conn);
var_dump($arrayError);
exit();

?>
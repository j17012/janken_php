<?php
    // コマンドライン引数を取得
    $numStr = $argv[1];

    $comHand = "0";
    
    // 入力された値を判定する
    numJudg($numStr);

    $myHand = $numStr;

    echo $myHand . "\n";
    echo $comHand . "\n";
    // 勝敗判定
    // if
    /*
    if(strcmp($myHand, $comHand) == 0){
        echo "あいこ";
    }else if(($myHand - 2) == $comHand && $myHand > $comHand){
        echo "勝利";
    }else{
        echo "敗北";
    }
    */

    //swithc
    switch($myHand){
        case(isset($myHand) == $comHand):
            echo "あいこ";
            break;
        case(($myHand - 2) == $comHand):
            echo "勝利";
            break;
        case(($myHand - 1) == $comHand):
            echo "敗北";
            break;
    }

    # エラー処理(0^2以外が入力された場合)
    function numJudg($numStr){
        try{
            # $numStrが2より大きいor0より小さい場合、例外を投げる
            if($numStr > 2 || $numStr < 0){
                throw new Exception();
            }
        }catch(Exception $e){
            echo "０～２の値を入力してください" . "\n";
            exit();
        }
    }
?>
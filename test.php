<?php
    janken($argv); #任意の値

    # じゃんけん
    function janken($argv){
        $myHand = $argv[1];

        $comHand = "0";

        // 入力された値を判定する
        numJudg($myHand);

        // 勝敗判定
        // if
        /*
        if($myHand == $comHand){
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

    }

    # エラー処理(0~2以外が入力された場合)
    function numJudg($numStr){
        try{
            # $numStrが2より大きい,0より小さい場合、例外を投げる
            if($numStr > 2 || $numStr < 0){
                throw new Exception();
            }
        }catch(Exception $e){
            echo "０～２の値を1つ入力してください" . "\n";
            exit();
        }
    }
?>
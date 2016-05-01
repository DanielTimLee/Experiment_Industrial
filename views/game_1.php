<?php
mysqli_query($link, constant("user_add"));
$com_val=rand(10000,50000);
?>
<div class="eight wide column">
    <h2 class="ui center aligned header" style="margin: 1em 0em;">
        <i class="large icons">
            <i class="rocket icon"></i>
        </i>
        <?= (int)($_COOKIE['trial']/5)+1?>번째 게임
        <div class="sub header" style="margin:1em 0em">
            파시겠습니까?
        </div>
    </h2>

    <div class="ui stackable segments">
        <div class="ui horizontal segments">
            <div class="ui left aligned segment">
                <p>반복 <?= (int)($_COOKIE['trial']/5)+1?></p>
            </div>
            <div class="ui right aligned segment">
                <p>남은 횟수 <?= 4-($_COOKIE['trial']%5)?></p>
            </div>
        </div>
        <div class="ui center aligned segment">
            <?=(int)($com_val/10000)?> 억 <br/>
            <?=(int)($com_val%10000)?> 만원
        </div>
        <div class="ui center aligned segment">
            <div class="ui buttons">
                <form action="?pages=sold" method="post">
                    <input type="hidden" value="<?=$com_val?>" name="val">
                    <button class="ui positive button">판매</button>
                </form>
                <div class="or"></div>
                <form action="#" method="post">
                    <button class="ui negative button">취소</button>
                </form>c
            </div>
        </div>
    </div>
</div>

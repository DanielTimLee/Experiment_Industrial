<?php
mysqli_query($link, constant("game_add"));
?>

<div class="eight wide column">
    <h2 class="ui center aligned header">
        <i class="huge icons">
            <i class="smile icon" style="margin-left:10px"></i>
        </i>
    </h2>
    <h1 class="ui center aligned header" style="margin: 1em 0em;">
        판매하였습니다!!
        <div class="sub header" style="margin:1em 0em">
            제품을 판매하였습니다!<br/>
            계속 게임을 진행해 주세요!
        </div>
    </h1>
    <a href="?pages=<?=$game?>">
        <button class="ui fluid animated button" tabindex="0">
            <div class="visible content">계속 진행하기</div>
            <div class="hidden content">
                <i class="right arrow icon"></i>
            </div>
        </button>
    </a><div class="ui horizontal divider">OR</div>
    <a href="?pages=game_2">
        <button class="ui fluid teal basic animated button" tabindex="0">
            <div class="visible content">두번째 게임으로 가기</div>
            <div class="hidden content">
                <i class="right arrow icon"></i>
            </div>
        </button>
    </a>
    <div class="ui horizontal divider">OR</div>
    <a href="?pages=thank">
        <button class="ui fluid red basic animated button" tabindex="0">
            <div class="visible content">게임 종료하기</div>
            <div class="hidden content">
                <i class="right arrow icon"></i>
            </div>
        </button>
    </a>
    </div>
</div>

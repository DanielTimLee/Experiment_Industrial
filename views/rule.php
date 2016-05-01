<?php
mysqli_query($link, constant("user_add"));
?>
<div class="eight wide column">
    <h2 class="ui center aligned header" style="margin: 1em 0em;">
        <i class="large icons">
            <i class="gamepad icon"></i>
        </i>
        How To Play?
        <div class="sub header" style="margin:1em 0em">
            다음 안내에 따라서 게임을 진행해 주십시오<br/>
            게임 진행 시간은 1~2분 정도 소요됩니다~
        </div>
    </h2>
    <div class="ui segment">
        <p>
            팔 기간 동안 변동 폭은 <br/>
            3억에서 5억 사이입니다
        </p>
        <div class="ui horizontal divider">
            규칙
        </div>
        <p>
            5번의 게임을 진행합니다.<br/>
            기회가 1번 남았을 경우, 꼭 판매를 해야 됩니다.
        </p>
    </div>
    <a href="?pages=game_1">
        <button class="ui fluid animated button" tabindex="0">
            <div class="visible content">게임 진행하기</div>
            <div class="hidden content">
                <i class="right arrow icon"></i>
            </div>
        </button>
    </a>
</div>


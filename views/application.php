<div class="eight wide column">
    <h2 class="ui center aligned header" style="margin: 1em 0em;">
        <i class="large icons">
            <i class="help icon"></i>
        </i>
        인적 사항
        <div class="sub header" style="margin:1em 0em">
            본 개인 정보는 실험 목적 외에는 사용되지 않습니다.
        </div>

        <div class="ui segment">
            <form class="ui form" action="index.php?pages=rule" method="post">
                <div class="fields">
                    <div class="eight wide field">
                        <label>휴대폰 번호</label>
                        <input type="text" name="phone" placeholder="휴대폰 번호를 입력해 주세요">
                    </div>
                    <div class="eight wide field">
                        <label>성별</label>
                        <select class="ui dropdown" name="gender">
                            <option value="">성별</option>
                            <option value="0">남자</option>
                            <option value="1">여자</option>
                        </select>
                    </div>
                </div>
                <div class="fields">
                    <div class="eight wide field">
                        <label>나이</label>
                        <select class="ui fluid dropdown" name="age">
                            <option value="">19xx년생</option>
                            <option value="1970">1970</option>
                            <option value="1971">1971</option>
                            <option value="1972">1972</option>
                            <option value="1973">1973</option>
                            <option value="1974">1974</option>
                            <option value="1975">1975</option>
                            <option value="1976">1976</option>
                            <option value="1977">1977</option>
                            <option value="1978">1978</option>
                            <option value="1979">1979</option>
                            <option value="1980">1980</option>
                            <option value="1981">1981</option>
                            <option value="1982">1982</option>
                            <option value="1983">1983</option>
                            <option value="1984">1984</option>
                            <option value="1985">1985</option>
                            <option value="1986">1986</option>
                            <option value="1987">1987</option>
                            <option value="1988">1988</option>
                            <option value="1989">1989</option>
                            <option value="1990">1990</option>
                            <option value="1991">1991</option>
                            <option value="1992">1992</option>
                            <option value="1993">1993</option>
                            <option value="1994">1994</option>
                            <option value="1995">1995</option>
                            <option value="1996">1996</option>
                            <option value="1997">1997</option>
                            <option value="1998">1998</option>
                            <option value="1999">1999</option>
                            <option value="2000">2000</option>
                            <option value="2001">2001</option>
                            <option value="2002">2002</option>
                            <option value="2003">2003</option>
                            <option value="2004">2004</option>
                            <option value="2005">2005</option>
                            <option value="2006">2006</option>
                            <option value="2007">2007</option>
                            <option value="2008">2008</option>
                            <option value="2009">2009</option>
                        </select>
                    </div>
                    <div class="eight wide field">
                        <label>성별</label>
                        <select class="ui dropdown" name="test">
                            <option value="">사회학 테스트</option>
                            <option value="0">test 1</option>
                            <option value="1">test 2</option>
                            <option value="2">test 3</option>
                            <option value="3">test 4</option>
                        </select>
                    </div>
                </div>
                <br/>
                <button class="ui fluid animated button" tabindex="0">
                    <div class="visible content">제출하기</div>
                    <div class="hidden content">
                        <i class="right arrow icon"></i>
                    </div>
                </button>
            </form>
        </div>
    </h2>
</div>


<script>
    $('select.dropdown')
        .dropdown()
    ;
</script>
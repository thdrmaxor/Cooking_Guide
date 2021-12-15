        <div id="main_img_bar">
            <img src="./img/main_img3.png">
        </div>

        <br><br>
        <div id="main_content">
            <div class="row">
                <hr>
                </hr>
                <br><br>
                <!-- 계량측정 메인페이지 -->
                <div style="display:inline-block">
                    <form action="main_1_1_1.php" method="post" target="popup" onsubmit="window.open('popup.php', 'popup', 'width=1500, height=350');">
                        <div align='center'>
                            <ul>
                                <li> 재료를 입력하세요! </li>
                                <li><textarea name="calculate" rows="1" cols="60" style="text-align:center; resize: none;"></textarea></li>
                                <li> g을 입력하세요! </li>
                                <li><textarea name=" count" rows="1" cols="60" style="text-align:center; resize: none;"></textarea></li>
                                <br>
                                <li><input type="submit" value="검색하기"></li>

                                <br>
                            </ul>
                        </div>
                    </form>
                </div>
                <div style="display:inline-block">
                    <form action="main_1_1_1_1.php" method="post" target="popup" onsubmit="window.open('popup.php', 'popup', 'width=1500, height=350');">
                        <div align='center'>
                            <ul>
                                <li> 재료를 정확히 입력하세요!</li>
                                <li><textarea name="id" rows="1" cols="60" style="text-align:center; resize: none;"></textarea></li>
                                <li> g을 입력하세요! </li>
                                <li><textarea name="gram" rows="1" cols="60" style="text-align:center; resize: none;"></textarea></li>
                                <br>
                                <li><input type="submit" value="저장"></li>

                                <br>
                            </ul>
                        </div>
                    </form>
                </div>
                <div style="display:inline-block">
                    <form action="main_1_1_1_1_1.php" method="post" target="popup" onsubmit="window.open('popup.php', 'popup', 'width=300, height=250');">
                        <div align='center'>
                            <ul>
                                <li><input type="submit" value="저장 초기화">
                                </li>
                                <br>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div>
            <a></a>
            </>

            <hr>
            </hr>
            <br><br>
            <footer>
                <?php include "footer.php"; ?>
            </footer>
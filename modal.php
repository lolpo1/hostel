<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <?php if ($_COOKIE['user'] == ''): ?>
                    <h5 class="modal-title">Вхід</h5>
                <?php else: ?>
                    <h5 class="modal-title">Ваш профіль</h5>
                <?php endif; ?>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            <div class="modal-body">
                <?php if ($_COOKIE['user'] == ''): ?>
                    <form action="auto.php" method="post">
                        <label for="authorization_email" class="d-flex mb-1">Імейл</label>
                        <input type="email" id="authorization_email"class="d-flex col-12" name="authorization_email">
                        <label for="authorization_pass" class="d-flex mb-1">Пароль</label>
                        <input type="password" id="authorization_pass" class="d-flex col-12 mb-2" name="authorization_pass">
                        <div class="d-flex justify-content-end align-items-center">
                            <a href="forgot.php" class="d-flex mb-2">Забули пароль?</a>  
                        </div>
                        <button class="btn btn-success btn-lg btn-block" type="submit">Вхід</button>
                    </form>
                    <div class="d-flex justify-content-center align-items-center mt-2">
                        <a href="registration.php">Реєстрація</a>
                    </div>
                <?php elseif ($_COOKIE['user'] == 'error'): ?>
                    <form action="auto.php" method="post">
                        <label for="authorization_email" class="d-flex mb-1">Імейл</label>
                        <input type="email" id="authorization_email"class="d-flex col-12" name="authorization_email">
                        <label for="authorization_pass" class="d-flex mb-1">Пароль</label>
                        <input type="password" id="authorization_pass" class="d-flex col-12 mb-2" name="authorization_pass">
                        <label for="">Неправильний імейл чи пароль</label>
                        <div class="d-flex justify-content-end align-items-center">
                            <a href="forgot.php" class="d-flex mb-2">Забули пароль?</a>  
                        </div>
                        <button class="btn btn-success btn-lg btn-block" type="submit">Вхід</button>
                    </form>
                <?php else: ?>
                    <div class="row">
                        <a href="profile.php" class="col-12">Мій профіль</a>
                        <a href="exituser.php" class="col-12">Вихід</a>  
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
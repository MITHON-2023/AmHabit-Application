function validateForm() {
    // 필드 값 가져오기
    var userPhone = document.getElementById("user_phone").value;
    var userPassword = document.getElementById("user_password").value;
    var confirmPassword = document.getElementById("confirm_password").value;
    var errorMessage = document.getElementById("error_message");

    // 필드가 비어있는지 검사
    if (userPhone === "" || userPassword === "" || confirmPassword === "") {
        errorMessage.innerHTML = "모든 필드를 작성하세요.";
        errorMessage.style.color = "red";
        setTimeout(function () {
            errorMessage.textContent = "";
          }, 1000);
        return false; // 제출 중지
    }

    // 비밀번호와 비밀번호 확인이 일치하는지 검사
    if (userPassword !== confirmPassword) {
        errorMessage.innerHTML = "비밀번호가 일치하지 않습니다.";
        errorMessage.style.color = "red";
        setTimeout(function () {
            errorMessage.textContent = "";
          }, 1000);
        return false; // 제출 중지
    }

    // 모든 검사가 통과되면 true를 반환하여 폼을 제출
    return true;
}

// Yaş hesaplama fonksiyonu
function calculateAge(dob) {
    const birthDate = new Date(dob);
    const today = new Date();
    let age = today.getFullYear() - birthDate.getFullYear();
    const month = today.getMonth() - birthDate.getMonth();
    if (month < 0 || (month === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }
    return age;
}

document.getElementById('child-info-form').addEventListener('submit', function(e) {
    e.preventDefault();

    const name = document.getElementById('child-name').value;
    const dob = document.getElementById('child-dob').value;
    const height = document.getElementById('child-height').value;
    const sleep = document.getElementById('child-sleep').value;
    const activities = document.getElementById('child-activities').value;

    const age = calculateAge(dob);

    if (name && dob && height && sleep && activities) {
        alert('Bilgiler başarıyla alındı! Çocuk yaşı: ' + age);
        window.location.href = 'grafik.html'; // Pasta grafiği sayfasına yönlendirme
    } else {
        alert('Lütfen tüm bilgileri doldurun.');
    }
});

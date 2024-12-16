// Nutrition Chart
const nutritionCtx = document.getElementById('nutritionChart').getContext('2d');
new Chart(nutritionCtx, {
    type: 'bar',
    data: {
        labels: ['Kahvaltı', 'Öğle Yemeği', 'Akşam Yemeği'],
        datasets: [{
            label: 'Kalori',
            data: [500, 700, 600],
            backgroundColor: ['#ff6384', '#36a2eb', '#cc65fe']
        }]
    }
});

// Sleep Chart
const sleepCtx = document.getElementById('sleepChart').getContext('2d');
new Chart(sleepCtx, {
    type: 'line',
    data: {
        labels: ['Pazartesi', 'Salı', 'Çarşamba', 'Perşembe', 'Cuma'],
        datasets: [{
            label: 'Uyku Süresi (Saat)',
            data: [8, 7.5, 9, 8.2, 8],
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        }]
    }
});

// Activity Chart
const activityCtx = document.getElementById('activityChart').getContext('2d');
new Chart(activityCtx, {
    type: 'pie',
    data: {
        labels: ['Koşu', 'Yüzme', 'Bisiklet'],
        datasets: [{
            label: 'Aktivite Süreleri',
            data: [30, 20, 50],
            backgroundColor: ['#ffcd56', '#ff6384', '#36a2eb']
        }]
    }
});

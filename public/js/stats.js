// Menunggu hingga seluruh konten DOM dimuat
document.addEventListener('DOMContentLoaded', () => {
    // Contoh data
    const data1 = [
        { name: "pmo(Project Management Officer)", value: 2 },
        { name: "e-penting", value: 3 },
        { name: "Pesona", value: 1 }
    ];

    const totalApps = data1.length;
    const totalFAQs = data1.reduce((acc, item) => acc + item.value, 0);

    console.log('Total Aplikasi:', totalApps);
    console.log('Total FAQ:', totalFAQs);

    // Mencari FAQ yang paling sering diakses
    const mostAccessedFAQ = data1.reduce((prev, current) => {
        return (prev.value > current.value) ? prev : current;
    });

    // Update elemen dengan nilai
    document.getElementById('total-apps').innerText = totalApps;
    document.getElementById('total-faqs').innerText = totalFAQs;
    document.getElementById('most-accessed-faq').innerText = `${mostAccessedFAQ.name} (${mostAccessedFAQ.value} akses)`;

    const chartContainer = document.getElementById('chart');

    data1.forEach(item => {
        const barLabel = document.createElement('div');
        barLabel.className = 'bar-label';
        barLabel.innerHTML = `<span>${item.name}</span><span>${item.value}</span>`;
        chartContainer.appendChild(barLabel);

        const bar = document.createElement('div');
        bar.className = 'bar';
        bar.style.width = `${item.value * 10}%`;
        chartContainer.appendChild(bar);
    });
});

function toggleAnswer(event, answerId) {
    event.preventDefault();  // Prevent the page from jumping to the top
    var answer = document.getElementById("answer" + answerId);
    if (answer.style.display === "none") {
        answer.style.display = "block";
    } else {
        answer.style.display = "none";
    }
}
document.addEventListener("DOMContentLoaded", function() {
    // Update the stats
    document.getElementById('total-apps').innerText = 3; // Example value
    document.getElementById('total-faqs').innerText = 9; // Example value
    document.getElementById('most-accessed-faq').innerText = ""; // Example value

    const data1 = [
        { name: "pmo(Project Management Officer)", value: 0.74 },
        { name: "e-penting", value: 3.22 },
        { name: "Pesona", value: 1.76 }
    ];

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
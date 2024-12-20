document.addEventListener("DOMContentLoaded", function() {
    const faqQuestions = document.querySelectorAll(".faq-question");
    const searchBar = document.getElementById("searchBar");

    // Menampilkan atau menyembunyikan jawaban saat pertanyaan diklik
    faqQuestions.forEach(function(question) {
        question.addEventListener("click", function() {
            const answer = this.nextElementSibling;
            answer.style.display = answer.style.display === "block" ? "none" : "block";
        });
    });

    // Fitur pencarian langsung (live search)
    searchBar.addEventListener("keyup", function() {
        const searchText = searchBar.value.toLowerCase();
        const faqItems = document.querySelectorAll(".faq-item");

        faqItems.forEach(function(item) {
            const questionText = item.querySelector(".faq-question").innerText.toLowerCase();
            if (questionText.includes(searchText)) {
                item.style.display = "block";
            } else {
                item.style.display = "none";
            }
        });
    });
});


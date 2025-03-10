<!-- <div class="container">
    <h2>Frequently Asked Questions</h2>

    @php
    $faqs = [
    ['question' => 'What is Laser 247?', 'answer' => 'Laser247 is a betting exchange platform that allows users to bet against each other, rather than against the house. This means that you can get better odds on your bets, and you have the potential to win more money.'],
    ['question' => 'What sports can I bet on on Laser 247?', 'answer' => 'Laser 247 offers betting on a wide variety of sports, including cricket, football, kabaddi, table tennis, and more. You can also bet on live events, such as cricket matches and football games.'],
    ['question' => 'How do I create an account on Laser 247?', 'answer' => 'To create an account on Laser 247, you will need to provide your name, email address, and password. You will also need to verify your account by providing your phone number and a government-issued ID.'],
    ['question' => 'How do I deposit money into my Laser 247 account?', 'answer' => 'To place a bet on Laser 247, you will need to select the event you want to bet on, the odds you want to bet at, and the amount of money you want to bet. You will then need to click the "Place Bet" button.'],
    ['question' => 'How do I withdraw money from my Laser 247 account?', 'answer' => 'You can withdraw money from your Laser 247 account using a variety of methods, including credit cards, debit cards, and bank transfers.'],
    ['question' => 'Is Laser 247 safe?', 'answer' => 'Laser 247 is a safe and secure betting platform. The platform is licensed by the Government of Curacao, and it uses SSL encryption to protect your personal and financial information.'],
    ['question' => 'Is Laser 247 legal?', 'answer' => 'The legality of betting on Laser 247 depends on your location. In some countries, betting on sports is legal, while in others it is not. You should check the laws in your country before betting on Laser 247.'],
    ];
    @endphp

    @foreach ($faqs as $faq)
    <div class="border-b-[1px] border-[#ccc]">
        <div class=" bg-[#0033a0] text-white p-2.5 font-bold cursor-pointer flex items-center justify-between" onclick="toggleAnswer(this)">
            {{ $faq['question'] }} <span class=" text-4xl font-medium">+</span>
        </div>
        <div class="bg-[#f9f9f9] p-2.5 hidden">
            {{ $faq['answer'] ?: 'No answer available' }}
        </div>
    </div>
    @endforeach
</div>

<script>
    function toggleAnswer(element) {
        var allAnswers = document.querySelectorAll('.faq-answer');
        var allQuestions = document.querySelectorAll('.faq-question');
        var answer = element.nextElementSibling;

        // Check if the clicked answer is already open
        var isOpen = answer.style.display === "block";

        // Close all answers first
        allAnswers.forEach(function(ans) {
            ans.style.display = "none";
        });

        // Reset all question symbols to "+"
        allQuestions.forEach(function(question) {
            question.textContent = question.textContent.replace(" -", " +");
        });

        // If the clicked question was not open, open it
        if (!isOpen) {
            answer.style.display = "block";
            element.textContent = element.textContent.replace(" +", " -");
        }
    }
</script> -->



 <section class="p-2.5 md:p-0">

     <div class="container ">
         <h2 class="text-[24px] text-[#050505] font-Roboto font-semibold text-center mb-3">Frequently Asked Questions</h2>
     
         @php
         $faqs = [
         ['question' => 'What is Laser 247?', 'answer' => 'Laser247 is a betting exchange platform that allows users to bet against each other, rather than against the house. This means that you can get better odds on your bets, and you have the potential to win more money.'],
         ['question' => 'What sports can I bet on on Laser 247?', 'answer' => 'Laser 247 offers betting on a wide variety of sports, including cricket, football, kabaddi, table tennis, and more. You can also bet on live events, such as cricket matches and football games.'],
         ['question' => 'How do I create an account on Laser 247?', 'answer' => 'To create an account on Laser 247, you will need to provide your name, email address, and password. You will also need to verify your account by providing your phone number and a government-issued ID.'],
         ['question' => 'How do I deposit money into my Laser 247 account?', 'answer' => 'To place a bet on Laser 247, you will need to select the event you want to bet on, the odds you want to bet at, and the amount of money you want to bet. You will then need to click the "Place Bet" button.'],
         ['question' => 'How do I withdraw money from my Laser 247 account?', 'answer' => 'You can withdraw money from your Laser 247 account using a variety of methods, including credit cards, debit cards, and bank transfers.'],
         ['question' => 'Is Laser 247 safe?', 'answer' => 'Laser 247 is a safe and secure betting platform. The platform is licensed by the Government of Curacao, and it uses SSL encryption to protect your personal and financial information.'],
         ['question' => 'Is Laser 247 legal?', 'answer' => 'The legality of betting on Laser 247 depends on your location. In some countries, betting on sports is legal, while in others it is not. You should check the laws in your country before betting on Laser 247.'],
         ];
         @endphp
     
         @foreach ($faqs as $faq)
         <div class="border-b-[1px] border-[#ccc]">
             <div class="faq-question bg-[#0033a0] text-white p-2.5 cursor-pointer flex items-center justify-between" onclick="toggleAnswer(this)">
                 <span class="text-[17px] font-semibold font-Roboto">{{ $faq['question'] }}</span>
                 <span class="toggle-symbol text-4xl font-medium">+</span>
             </div>
             <div class="faq-answer bg-white  overflow-hidden max-h-0 transition-all duration-300 text-[17px] font-Roboto text-black border-[1px] border-[#d5d8dc] border-t-0">
                 {{ $faq['answer'] ?: 'No answer available' }}
             </div>
         </div>
         @endforeach
     </div>
 </section>

<style>
    .faq-answer {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-in-out, padding 0.3s ease-in-out;
        padding: 0px;
    }
    
    .faq-answer.open {
        min-height: 80px; 
        height: fit-content;
        max-height: 100%;
        padding: 10px;
        padding: 15px 20px;
    }
</style>

<script>
    function toggleAnswer(element) {
        var answer = element.nextElementSibling;
        var symbol = element.querySelector('.toggle-symbol');

        var isOpen = answer.classList.contains("open");

        // Close all answers first
        document.querySelectorAll('.faq-answer').forEach(ans => ans.classList.remove("open"));
        document.querySelectorAll('.toggle-symbol').forEach(sym => sym.textContent = "+");

        // Toggle the current answer
        if (!isOpen) {
            answer.classList.add("open");
            symbol.textContent = "-";
        }
    }
</script>

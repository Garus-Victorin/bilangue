<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produits - BiLangue</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        :root {
            --primary: #FF6B00;
            --primary-dark: #E55A00;
            --primary-light: #FF8C33;
            --secondary: #1a1a2e;
            --white: #FFFFFF;
            --gray: #636e72;
            --light-gray: #f0f2f5;
            --success: #10b981;
            --shadow: 0 4px 20px rgba(0,0,0,0.08);
            --shadow-hover: 0 8px 30px rgba(255, 107, 0, 0.15);
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background: #f8f9fa;
            min-height: 100vh;
            padding-bottom: 80px;
        }
        
        /* Header */
        .header {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            padding: 20px 25px;
            display: flex;
            align-items: center;
            gap: 15px;
            box-shadow: 0 4px 20px rgba(255, 107, 0, 0.25);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .back-btn {
            width: 40px;
            height: 40px;
            background: rgba(255,255,255,0.2);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .back-btn:hover {
            background: rgba(255,255,255,0.3);
        }
        
        .header-title {
            flex: 1;
        }
        
        .header-title h1 {
            color: white;
            font-size: 20px;
            font-weight: 700;
        }
        
        .header-title p {
            color: rgba(255,255,255,0.85);
            font-size: 12px;
        }
        
        /* Progress Bar */
        .progress-container {
            background: white;
            padding: 20px 25px;
            box-shadow: var(--shadow);
        }
        
        .progress-info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        
        .progress-text {
            font-size: 13px;
            color: var(--gray);
        }
        
        .progress-percent {
            font-size: 13px;
            font-weight: 600;
            color: var(--primary);
        }
        
        .progress-bar {
            height: 8px;
            background: var(--light-gray);
            border-radius: 10px;
            overflow: hidden;
        }
        
        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, var(--primary), var(--primary-light));
            border-radius: 10px;
            width: 0%;
            transition: width 0.5s ease;
        }
        
        /* Container */
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 25px 20px;
        }
        
        /* Word Card */
        .word-card {
            background: white;
            border-radius: 24px;
            padding: 35px 30px;
            box-shadow: var(--shadow);
            text-align: center;
            margin-bottom: 25px;
            position: relative;
            overflow: hidden;
        }
        
        .word-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 6px;
            background: linear-gradient(90deg, var(--primary), var(--primary-light));
        }
        
        /* Emoji Badge */
        .emoji-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #fff5f0, #fff0e6);
            width: 80px;
            height: 80px;
            border-radius: 50%;
            font-size: 42px;
            margin: 0 auto 20px;
            box-shadow: 0 4px 15px rgba(255, 107, 0, 0.15);
            position: relative;
            transition: all 0.3s ease;
            animation: bounce 2s ease-in-out infinite;
        }
        
        .emoji-badge::before {
            content: '';
            position: absolute;
            top: -3px;
            left: -3px;
            right: -3px;
            bottom: -3px;
            border: 2px solid var(--primary-light);
            border-radius: 50%;
            opacity: 0.3;
        }
        
        .emoji-label {
            font-size: 11px;
            color: var(--gray);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 5px;
        }
        
        .word-row {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
            margin-bottom: 15px;
        }
        
        .word-col {
            flex: 1;
            text-align: center;
        }
        
        .word-col.from {
            border-right: 2px dashed var(--light-gray);
        }
        
        .lang-label {
            font-size: 11px;
            color: var(--gray);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 8px;
        }
        
        .lang-label.from {
            color: var(--secondary);
        }
        
        .lang-label.to {
            color: var(--primary);
        }
        
        .word {
            font-size: 28px;
            font-weight: 700;
        }
        
        .word.from {
            color: var(--secondary);
        }
        
        .word.to {
            color: var(--primary);
        }
        
        .arrow-icon {
            color: var(--primary);
            font-size: 24px;
        }
        
        /* Navigation */
        .card-nav {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 15px;
        }
        
        .nav-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            background: white;
            box-shadow: var(--shadow);
            font-size: 18px;
            color: var(--secondary);
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .nav-btn.round {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
        
        .nav-btn.finish {
            width: auto;
            padding: 12px 30px;
            border-radius: 25px;
            font-size: 14px;
            font-weight: 600;
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
        }
        
        .nav-btn:hover:not(:disabled) {
            transform: scale(1.05);
        }
        
        .nav-btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }
        
        .card-counter {
            background: white;
            padding: 12px 25px;
            border-radius: 20px;
            font-size: 14px;
            color: var(--gray);
            box-shadow: var(--shadow);
        }
        
        /* Bottom Nav */
        .bottom-nav {
            display: none;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: white;
            box-shadow: 0 -4px 20px rgba(0,0,0,0.1);
            padding: 10px 0;
            z-index: 100;
        }
        
        .bottom-nav-items {
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        
        .bottom-nav-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-decoration: none;
            color: var(--gray);
            padding: 5px 15px;
            border-radius: 12px;
            transition: all 0.3s;
        }
        
        .bottom-nav-item.active {
            color: var(--primary);
            background: #fff5f0;
        }
        
        .bottom-nav-item i {
            font-size: 22px;
            margin-bottom: 4px;
        }
        
        .bottom-nav-item span {
            font-size: 11px;
            font-weight: 500;
        }
        
        @media (max-width: 768px) {
            .header {
                padding: 15px 20px;
            }
            
            .header-title h1 {
                font-size: 18px;
            }
            
            .word-card {
                padding: 25px 20px;
            }
            
            .emoji-badge {
                width: 65px;
                height: 65px;
                font-size: 34px;
            }
            
            .word {
                font-size: 22px;
            }
            
            .word-row {
                flex-direction: column;
                gap: 15px;
            }
            
            .word-col.from {
                border-right: none;
                border-bottom: 2px dashed var(--light-gray);
                padding-bottom: 15px;
            }
            
            .arrow-icon {
                transform: rotate(90deg);
            }
            
            .bottom-nav {
                display: block;
            }
            
            body {
                padding-bottom: 70px;
            }
        }
        
        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .word-card {
            animation: fadeInUp 0.5s ease;
        }
        
        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-5px);
            }
        }
        
        .emoji-badge {
            animation: bounce 2s ease-in-out infinite;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <a href="{{ route('home') }}" class="back-btn">
            <i class="fas fa-arrow-left"></i>
        </a>
        <div class="header-title">
            <h1>Produits</h1>
            <p>{{ ucfirst($fromLang) }} → {{ ucfirst($toLang) }}</p>
        </div>
    </header>
    
    <!-- Progress -->
    <div class="progress-container">
        <div class="progress-info">
            <span class="progress-text">Progression</span>
            <span class="progress-percent" id="progressPercent">0%</span>
        </div>
        <div class="progress-bar">
            <div class="progress-fill" id="progressFill"></div>
        </div>
    </div>
    
    <div class="container">
        <!-- Word Card -->
        <div class="word-card" id="wordCard">
            <div class="emoji-label">Produit</div>
            <div class="emoji-badge" id="emojiBadge">🛒</div>
            
            <div class="word-row">
                <div class="word-col from">
                    <div class="lang-label from">{{ ucfirst($fromLang) }}</div>
                    <div class="word from" id="fromWord">{{ $produits->first()->{$fromColumn} ?? '' }}</div>
                </div>
                
                <div class="arrow-icon">
                    <i class="fas fa-arrow-right"></i>
                </div>
                
                <div class="word-col to">
                    <div class="lang-label to">{{ ucfirst($toLang) }}</div>
                    <div class="word to" id="toWord">{{ $produits->first()->{$toColumn} ?? '' }}</div>
                </div>
            </div>
        </div>
        
        <!-- Navigation -->
        <div class="card-nav">
            <button class="nav-btn round" id="prevBtn" onclick="prevCard()">
                <i class="fas fa-chevron-left"></i>
            </button>
            <div class="card-counter">
                <span id="currentIndex">1</span> / <span id="totalCards">{{ $produits->count() }}</span>
            </div>
            <button class="nav-btn round" id="nextBtn" onclick="nextOrFinish()">
                <i class="fas fa-chevron-right" id="nextIcon"></i>
                <span id="nextText" style="display:none;">Terminer</span>
            </button>
        </div>
    </div>
    
    <!-- Bottom Nav -->
    <nav class="bottom-nav">
        <div class="bottom-nav-items">
            <a href="{{ route('home') }}" class="bottom-nav-item">
                <i class="fas fa-home"></i>
                <span>Accueil</span>
            </a>
            <a href="#" class="bottom-nav-item active">
                <i class="fas fa-book-open"></i>
                <span>Cours</span>
            </a>
            <a href="#" class="bottom-nav-item">
                <i class="fas fa-chart-bar"></i>
                <span>Progrès</span>
            </a>
            <a href="#" class="bottom-nav-item">
                <i class="fas fa-cog"></i>
                <span>Paramètres</span>
            </a>
        </div>
    </nav>
    
    <script>
        const produits = @json($produits);
        const fromColumn = '{{ $fromColumn }}';
        const toColumn = '{{ $toColumn }}';
        
        let currentIndex = 0;
        
        function updateCard() {
            const fromWord = document.getElementById('fromWord');
            const toWord = document.getElementById('toWord');
            const emojiBadge = document.getElementById('emojiBadge');
            const currentIndexEl = document.getElementById('currentIndex');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const nextIcon = document.getElementById('nextIcon');
            const nextText = document.getElementById('nextText');
            
            const item = produits[currentIndex];
            fromWord.textContent = item[fromColumn] || '';
            toWord.textContent = item[toColumn] || '';
            emojiBadge.textContent = item.emoji || '🛒';
            
            currentIndexEl.textContent = currentIndex + 1;
            
            prevBtn.disabled = currentIndex === 0;
            
            if (currentIndex === produits.length - 1) {
                nextBtn.classList.remove('round');
                nextBtn.classList.add('finish');
                nextIcon.style.display = 'none';
                nextText.style.display = 'inline';
            } else {
                nextBtn.classList.remove('finish');
                nextBtn.classList.add('round');
                nextIcon.style.display = 'inline';
                nextText.style.display = 'none';
            }
            
            const progress = ((currentIndex + 1) / produits.length) * 100;
            document.getElementById('progressFill').style.width = progress + '%';
            document.getElementById('progressPercent').textContent = Math.round(progress) + '%';
        }
        
        function nextOrFinish() {
            if (currentIndex < produits.length - 1) {
                currentIndex++;
                updateCard();
            } else {
                window.location.href = '{{ route("home") }}';
            }
        }
        
        function prevCard() {
            if (currentIndex > 0) {
                currentIndex--;
                updateCard();
            }
        }
        
        document.addEventListener('keydown', function(e) {
            if (e.key === 'ArrowRight') nextOrFinish();
            if (e.key === 'ArrowLeft') prevCard();
        });
        
        updateCard();
    </script>
</body>
</html>


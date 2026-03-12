<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Couleurs - BiLangue</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
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
        }
        body { font-family: 'Poppins', sans-serif; background: #f8f9fa; min-height: 100vh; padding-bottom: 80px; }
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
        .back-btn:hover { background: rgba(255,255,255,0.3); }
        .header-title { flex: 1; }
        .header-title h1 { color: white; font-size: 20px; font-weight: 700; }
        .header-title p { color: rgba(255,255,255,0.85); font-size: 12px; }
        .progress-container { background: white; padding: 20px 25px; box-shadow: var(--shadow); }
        .progress-info { display: flex; justify-content: space-between; margin-bottom: 10px; }
        .progress-text { font-size: 13px; color: var(--gray); }
        .progress-percent { font-size: 13px; font-weight: 600; color: var(--primary); }
        .progress-bar { height: 8px; background: var(--light-gray); border-radius: 10px; overflow: hidden; }
        .progress-fill { height: 100%; background: linear-gradient(90deg, var(--primary), var(--primary-light)); border-radius: 10px; width: 0%; transition: width 0.5s ease; }
        .container { max-width: 600px; margin: 0 auto; padding: 25px 20px; }
        .color-square {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            border: 3px solid white;
            transition: transform 0.3s ease;
        }
        .color-square:hover {
            transform: scale(1.1);
        }
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
        .color-swatch {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            border: 4px solid white;
            transition: transform 0.3s ease;
        }
        .color-swatch:hover {
            transform: scale(1.1);
        }
        .color-swatch.white {
            border-color: #ddd;
        }
        .color-swatch span {
            font-size: 24px;
            text-shadow: 0 1px 3px rgba(0,0,0,0.3);
        }
        .word-row { display: flex; align-items: center; justify-content: center; gap: 20px; margin-bottom: 15px; }
        .word-col { flex: 1; text-align: center; }
        .word-col.from { border-right: 2px dashed var(--light-gray); }
        .lang-label { font-size: 11px; color: var(--gray); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px; }
        .lang-label.from { color: var(--secondary); }
        .lang-label.to { color: var(--primary); }
        .word { font-size: 28px; font-weight: 700; }
        .word.from { color: var(--secondary); }
        .word.to { color: var(--primary); }
        .arrow-icon { color: var(--primary); font-size: 24px; }
        .card-nav { display: flex; justify-content: center; align-items: center; gap: 15px; }
        .nav-btn { display: flex; align-items: center; justify-content: center; border: none; background: white; box-shadow: var(--shadow); font-size: 18px; color: var(--secondary); cursor: pointer; transition: all 0.3s; }
        .nav-btn.round { width: 50px; height: 50px; border-radius: 50%; }
        .nav-btn.finish { width: auto; padding: 12px 30px; border-radius: 25px; font-size: 14px; font-weight: 600; background: linear-gradient(135deg, var(--primary), var(--primary-dark)); color: white; }
        .nav-btn:hover:not(:disabled) { transform: scale(1.05); }
        .nav-btn:disabled { opacity: 0.5; cursor: not-allowed; }
        .card-counter { background: white; padding: 12px 25px; border-radius: 20px; font-size: 14px; color: var(--gray); box-shadow: var(--shadow); }
        .bottom-nav { display: none; position: fixed; bottom: 0; left: 0; right: 0; background: white; box-shadow: 0 -4px 20px rgba(0,0,0,0.1); padding: 10px 0; z-index: 100; }
        .bottom-nav-items { display: flex; justify-content: space-around; align-items: center; }
        .bottom-nav-item { display: flex; flex-direction: column; align-items: center; text-decoration: none; color: var(--gray); padding: 5px 15px; border-radius: 12px; transition: all 0.3s; }
        .bottom-nav-item.active { color: var(--primary); background: #fff5f0; }
        .bottom-nav-item i { font-size: 22px; margin-bottom: 4px; }
        .bottom-nav-item span { font-size: 11px; font-weight: 500; }
        @media (max-width: 768px) {
            .header { padding: 15px 20px; }
            .header-title h1 { font-size: 18px; }
            .word-card { padding: 25px 20px; }
            .word { font-size: 22px; }
            .word-row { flex-direction: column; gap: 15px; }
            .word-col.from { border-right: none; border-bottom: 2px dashed var(--light-gray); padding-bottom: 15px; }
            .arrow-icon { transform: rotate(90deg); }
            .bottom-nav { display: block; }
            body { padding-bottom: 70px; }
        }
        @keyframes fadeInUp { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
        .word-card { animation: fadeInUp 0.5s ease; }
    </style>
</head>
<body>
    <header class="header">
        <a href="{{ route('home') }}" class="back-btn"><i class="fas fa-arrow-left"></i></a>
        <div class="header-title">
            <h1>Couleurs</h1>
            <p>{{ ucfirst($fromLang) }} → {{ ucfirst($toLang) }}</p>
        </div>
    </header>
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
        <div class="word-card" id="wordCard">
            <div class="color-square" id="colorSquare"></div>
            <div class="word-row">
                <div class="word-col from">
                    <div class="lang-label from">{{ ucfirst($fromLang) }}</div>
                    <div class="word from" id="fromWord">{{ $couleurs->first()->{$fromColumn} ?? '' }}</div>
                </div>
                <div class="arrow-icon"><i class="fas fa-arrow-right"></i></div>
                <div class="word-col to">
                    <div class="lang-label to">{{ ucfirst($toLang) }}</div>
                    <div class="word to" id="toWord">{{ $couleurs->first()->{$toColumn} ?? '' }}</div>
                </div>
            </div>
        </div>
        <div class="card-nav">
            <button class="nav-btn round" id="prevBtn" onclick="prevCard()"><i class="fas fa-chevron-left"></i></button>
            <div class="card-counter">
                <span id="currentIndex">1</span> / <span id="totalCards">{{ $couleurs->count() }}</span>
            </div>
            <button class="nav-btn round" id="nextBtn" onclick="nextOrFinish()">
                <i class="fas fa-chevron-right" id="nextIcon"></i>
                <span id="nextText" style="display:none;">Terminer</span>
            </button>
        </div>
    </div>
    <nav class="bottom-nav">
        <div class="bottom-nav-items">
            <a href="{{ route('home') }}" class="bottom-nav-item"><i class="fas fa-home"></i><span>Accueil</span></a>
            <a href="#" class="bottom-nav-item active"><i class="fas fa-book-open"></i><span>Cours</span></a>
            <a href="#" class="bottom-nav-item"><i class="fas fa-chart-bar"></i><span>Progrès</span></a>
            <a href="#" class="bottom-nav-item"><i class="fas fa-cog"></i><span>Paramètres</span></a>
        </div>
    </nav>
    <script>
        const couleurs = @json($couleurs);
        const fromColumn = '{{ $fromColumn }}';
        const toColumn = '{{ $toColumn }}';
        const colorMap = {
            'rouge': '#FF0000',
            'bleu': '#0000FF',
            'vert': '#008000',
            'jaune': '#FFFF00',
            'noir': '#000000',
            'blanc': '#FFFFFF'
        };
        
        function getColor(couleurName) {
            if (!couleurName) return '#CCCCCC';
            return colorMap[couleurName.toLowerCase()] || '#CCCCCC';
        }
        
        function getColorForItem(item) {
            if (!item) return '#CCCCCC';
            return item.typecouleur || getColor(item.couleur) || '#CCCCCC';
        }
        
        let currentIndex = 0;
        function updateCard() {
            const fromWord = document.getElementById('fromWord');
            const toWord = document.getElementById('toWord');
            const colorSquare = document.getElementById('colorSquare');
            const currentIndexEl = document.getElementById('currentIndex');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const nextIcon = document.getElementById('nextIcon');
            const nextText = document.getElementById('nextText');
            const item = couleurs[currentIndex];
            fromWord.textContent = item[fromColumn] || '';
            toWord.textContent = item[toColumn] || '';
            colorSquare.style.backgroundColor = getColorForItem(item);
            currentIndexEl.textContent = currentIndex + 1;
            prevBtn.disabled = currentIndex === 0;
            if (currentIndex === couleurs.length - 1) {
                nextBtn.disabled = false;
                nextBtn.classList.remove('round');
                nextBtn.classList.add('finish');
                nextIcon.style.display = 'none';
                nextText.style.display = 'inline';
            } else {
                nextBtn.disabled = false;
                nextBtn.classList.remove('finish');
                nextBtn.classList.add('round');
                nextIcon.style.display = 'inline';
                nextText.style.display = 'none';
            }
            const progress = ((currentIndex + 1) / couleurs.length) * 100;
            document.getElementById('progressFill').style.width = progress + '%';
            document.getElementById('progressPercent').textContent = Math.round(progress) + '%';
        }
        function nextOrFinish() {
            if (currentIndex < couleurs.length - 1) { currentIndex++; updateCard(); }
            else { window.location.href = '{{ route("home") }}'; }
        }
        function prevCard() { if (currentIndex > 0) { currentIndex--; updateCard(); } }
        document.addEventListener('keydown', function(e) { if (e.key === 'ArrowRight') nextOrFinish(); if (e.key === 'ArrowLeft') prevCard(); });
        updateCard();
    </script>
</body>
</html>


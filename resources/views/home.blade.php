<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - BiLangue</title>
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
        
        /* Desktop Navbar */
        .navbar {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 20px rgba(255, 107, 0, 0.25);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .navbar-brand {
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .navbar-brand img {
            width: 40px;
            height: 40px;
            background: white;
            border-radius: 10px;
            padding: 6px;
        }
        
        .navbar-brand span {
            font-size: 20px;
            font-weight: 700;
            color: white;
        }
        
        .navbar-user {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: white;
            color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
        }
        
        .user-info {
            color: white;
            text-align: right;
        }
        
        .user-name {
            font-size: 14px;
            font-weight: 600;
        }
        
        .user-level {
            font-size: 11px;
            opacity: 0.9;
        }
        
        /* Main Content */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 25px 20px;
        }
        
        /* Language Info Card */
        .lang-info-card {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            border-radius: 20px;
            padding: 25px;
            color: white;
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
        }
        
        .lang-info-card::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 60%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
        }
        
        .lang-info-card h2 {
            font-size: 18px;
            margin-bottom: 20px;
            position: relative;
        }
        
        .lang-row {
            display: flex;
            gap: 20px;
            position: relative;
            z-index: 1;
        }
        
        .lang-item {
            flex: 1;
            background: rgba(255,255,255,0.15);
            backdrop-filter: blur(10px);
            border-radius: 14px;
            padding: 15px;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .lang-flag {
            font-size: 28px;
        }
        
        .lang-details {
            flex: 1;
        }
        
        .lang-label {
            font-size: 11px;
            opacity: 0.8;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .lang-value {
            font-size: 15px;
            font-weight: 600;
            text-transform: capitalize;
        }
        
        /* Section Title */
        .section-title {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .section-title h3 {
            font-size: 20px;
            color: var(--secondary);
            font-weight: 700;
        }
        
        .see-all {
            color: var(--primary);
            font-size: 14px;
            font-weight: 500;
            text-decoration: none;
        }
        
        /* Categories Grid */
        .categories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
            gap: 15px;
        }
        
        .category-card {
            background: white;
            border-radius: 18px;
            padding: 20px 15px;
            text-align: center;
            text-decoration: none;
            box-shadow: var(--shadow);
            transition: all 0.3s ease;
            border: 2px solid transparent;
            position: relative;
            overflow: hidden;
        }
        
        .category-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary), var(--primary-light));
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }
        
        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
            border-color: var(--primary-light);
        }
        
        .category-card:hover::before {
            transform: scaleX(1);
        }
        
        .category-icon {
            width: 55px;
            height: 55px;
            background: linear-gradient(135deg, #fff5f0, #fff0e6);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 12px;
            font-size: 26px;
        }
        
        .category-title {
            font-size: 14px;
            font-weight: 600;
            color: var(--secondary);
            margin-bottom: 4px;
        }
        
        .category-desc {
            font-size: 11px;
            color: var(--gray);
        }
        
        .category-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background: var(--success);
            color: white;
            font-size: 10px;
            padding: 3px 8px;
            border-radius: 10px;
            font-weight: 500;
        }
        
        /* Bottom Navbar (Mobile - WhatsApp Style) */
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
            transition: all 0.3s ease;
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
        
        /* Quick Actions */
        .quick-actions {
            display: flex;
            gap: 15px;
            margin-bottom: 30px;
        }
        
        .quick-action {
            flex: 1;
            background: white;
            border-radius: 16px;
            padding: 20px;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 15px;
            box-shadow: var(--shadow);
            transition: all 0.3s ease;
        }
        
        .quick-action:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-hover);
        }
        
        .quick-action-icon {
            width: 45px;
            height: 45px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }
        
        .quick-action-icon.practice {
            background: linear-gradient(135deg, #e8f5e9, #c8e6c9);
        }
        
        .quick-action-icon.progress {
            background: linear-gradient(135deg, #e3f2fd, #bbdefb);
        }
        
        .quick-action-text h4 {
            font-size: 14px;
            color: var(--secondary);
            font-weight: 600;
        }
        
        .quick-action-text p {
            font-size: 12px;
            color: var(--gray);
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .navbar {
                padding: 12px 20px;
            }
            
            .navbar-brand span {
                font-size: 18px;
            }
            
            .user-info {
                display: none;
            }
            
            .lang-row {
                flex-direction: column;
                gap: 12px;
            }
            
            .categories-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 12px;
            }
            
            .category-card {
                padding: 15px 12px;
            }
            
            .category-icon {
                width: 45px;
                height: 45px;
                font-size: 22px;
            }
            
            .category-title {
                font-size: 13px;
            }
            
            .quick-actions {
                flex-direction: column;
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
        
        .category-card {
            animation: fadeInUp 0.5s ease forwards;
        }
        
        .category-card:nth-child(1) { animation-delay: 0.05s; }
        .category-card:nth-child(2) { animation-delay: 0.1s; }
        .category-card:nth-child(3) { animation-delay: 0.15s; }
        .category-card:nth-child(4) { animation-delay: 0.2s; }
        .category-card:nth-child(5) { animation-delay: 0.25s; }
        .category-card:nth-child(6) { animation-delay: 0.3s; }
        .category-card:nth-child(7) { animation-delay: 0.35s; }
        .category-card:nth-child(8) { animation-delay: 0.4s; }
        .category-card:nth-child(9) { animation-delay: 0.45s; }
        .category-card:nth-child(10) { animation-delay: 0.5s; }
        .category-card:nth-child(11) { animation-delay: 0.55s; }
        .category-card:nth-child(12) { animation-delay: 0.6s; }
    </style>
</head>
<body>
    <!-- Desktop Navbar -->
    <nav class="navbar">
        <div class="navbar-brand">
            <img src="{{ asset('logo.png') }}" alt="BiLangue">
            <span>BiLangue</span>
        </div>
        <div class="navbar-user">
            <div class="user-info">
                <div class="user-name">{{ Auth::user()->prenom }} {{ Auth::user()->nom }}</div>
                <div class="user-level">Apprenant</div>
            </div>
            <div class="user-avatar">
                {{ strtoupper(substr(Auth::user()->prenom, 0, 1)) }}{{ strtoupper(substr(Auth::user()->nom, 0, 1)) }}
            </div>
            <a href="{{ route('logout') }}" style="color: white; margin-left: 10px;" 
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </nav>
    
    <div class="container">
        <!-- Language Info Card -->
        <div class="lang-info-card">
            <h2><i class="fas fa-language"></i> Vos langues</h2>
            <div class="lang-row">
                <div class="lang-item">
                    <span class="lang-flag">
                        @if(Auth::user()->langue_parlee == 'francais')🇫🇷@else🇺🇸@endif
                    </span>
                    <div class="lang-details">
                        <div class="lang-label">Je parle</div>
                        <div class="lang-value">{{ Auth::user()->langue_parlee ?? 'Non défini' }}</div>
                    </div>
                </div>
                <div class="lang-item">
                    <span class="lang-flag">🌍</span>
                    <div class="lang-details">
                        <div class="lang-label">J'apprends</div>
                        <div class="lang-value">{{ Auth::user()->langue_apprendre ?? 'Non défini' }}</div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Quick Actions -->
        <div class="quick-actions">
            <a href="#" class="quick-action">
                <div class="quick-action-icon practice">
                    <i class="fas fa-play" style="color: #2e7d32;"></i>
                </div>
                <div class="quick-action-text">
                    <h4>Continuer</h4>
                    <p>Reprendre votre dernière leçon</p>
                </div>
            </a>
            <a href="#" class="quick-action">
                <div class="quick-action-icon progress">
                    <i class="fas fa-chart-line" style="color: #1565c0;"></i>
                </div>
                <div class="quick-action-text">
                    <h4>Progrès</h4>
                    <p>Voir votre évolution</p>
                </div>
            </a>
        </div>
        
        <!-- Categories Section -->
        <div class="section-title">
            <h3>Catégories</h3>
            <a href="#" class="see-all">Voir tout <i class="fas fa-arrow-right"></i></a>
        </div>
        
        <div class="categories-grid">
            <a href="{{ route('salutations.learn') }}" class="category-card">
                <span class="category-badge">Nouveau</span>
                <div class="category-icon">👋</div>
                <div class="category-title">Salutations</div>
                <div class="category-desc">Apprendre à dire bonjour</div>
            </a>
            
<a href="{{ route('nombres.learn') }}" class="category-card">
                <div class="category-icon">🔢</div>
                <div class="category-title">Nombres</div>
                <div class="category-desc">Compter</div>
            </a>
            
            <a href="{{ route('couleurs.learn') }}" class="category-card">
                <div class="category-icon">🎨</div>
                <div class="category-title">Couleurs</div>
                <div class="category-desc">Les couleurs</div>
            </a>
            
<a href="{{ route('parties_du_corps.learn') }}" class="category-card">
                <div class="category-icon">🫀</div>
                <div class="category-title">Corps</div>
                <div class="category-desc">Parties du corps</div>
            </a>
            
            <a href="{{ route('phrases_basiques.learn') }}" class="category-card">
                <span class="category-badge">Populaire</span>
                <div class="category-icon">💬</div>
                <div class="category-title">Phrases</div>
                <div class="category-desc">Phrases essentielles</div>
            </a>
            
            <a href="{{ route('presentations.learn') }}" class="category-card">
                <div class="category-icon">👤</div>
                <div class="category-title">Présentations</div>
                <div class="category-desc">Se présenter</div>
            </a>
            
            <a href="{{ route('demandes_aide.learn') }}" class="category-card">
                <div class="category-icon">🆘</div>
                <div class="category-title">Aide</div>
                <div class="category-desc">Demander de l'aide</div>
            </a>
            
            <a href="{{ route('expressions_basiques.learn') }}" class="category-card">
                <div class="category-icon">📚</div>
                <div class="category-title">Expressions</div>
                <div class="category-desc">Expressions de base</div>
            </a>
            
            <a href="{{ route('expressions_ecole.learn') }}" class="category-card">
                <div class="category-icon">🏫</div>
                <div class="category-title">École</div>
                <div class="category-desc">Vocabulaire scolaire</div>
            </a>
            
            <a href="{{ route('expressions_maison.learn') }}" class="category-card">
                <div class="category-icon">🏠</div>
                <div class="category-title">Maison</div>
                <div class="category-desc">Vie quotidienne</div>
            </a>
            
            <a href="{{ route('expressions_voyage.learn') }}" class="category-card">
                <div class="category-icon">✈️</div>
                <div class="category-title">Voyage</div>
                <div class="category-desc">Expressions voyage</div>
            </a>
            
            <a href="{{ route('produits.learn') }}" class="category-card">
                <div class="category-icon">🛒</div>
                <div class="category-title">Produits</div>
                <div class="category-desc">Achats</div>
            </a>
        </div>
        
        @if(Auth::user()->type === 'admin')
        <div class="section-title" style="margin-top: 40px;">
            <h3>Administration</h3>
        </div>
        <div class="categories-grid">
            <a href="{{ route('account.setting.edit') }}" class="category-card">
                <div class="category-icon">⚙️</div>
                <div class="category-title">Paramètres</div>
                <div class="category-desc">Gérer le compte</div>
            </a>
        </div>
        @endif
    </div>
    
    <!-- Bottom Navbar (Mobile - WhatsApp Style) -->
    <nav class="bottom-nav">
        <div class="bottom-nav-items">
            <a href="{{ route('home') }}" class="bottom-nav-item active">
                <i class="fas fa-home"></i>
                <span>Accueil</span>
            </a>
            <a href="#" class="bottom-nav-item">
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
</body>
</html>


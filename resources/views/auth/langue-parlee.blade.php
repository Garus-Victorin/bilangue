<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Langue parlée - BiLangue</title>
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
            --shadow: 0 10px 40px rgba(255, 107, 0, 0.15);
            --shadow-hover: 0 15px 50px rgba(255, 107, 0, 0.25);
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #fff5f0 0%, #ffffff 50%, #fff0e6 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        .language-container {
            width: 100%;
            max-width: 520px;
        }
        
        .language-card {
            background: var(--white);
            border-radius: 24px;
            box-shadow: var(--shadow);
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .language-card:hover {
            box-shadow: var(--shadow-hover);
            transform: translateY(-5px);
        }
        
        .language-header {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            padding: 40px 40px 30px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .language-header::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 60%);
            animation: shimmer 3s ease-in-out infinite;
        }
        
        @keyframes shimmer {
            0%, 100% { transform: translate(-10%, -10%); }
            50% { transform: translate(10%, 10%); }
        }
        
        .step-indicator {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
        }
        
        .step {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255,255,255,0.3);
            transition: all 0.3s ease;
        }
        
        .step.active {
            background: white;
            transform: scale(1.2);
        }
        
        .step.completed {
            background: #10b981;
        }
        
        .language-header .logo {
            width: 60px;
            height: 60px;
            background: white;
            border-radius: 16px;
            padding: 10px;
            margin: 0 auto 15px;
            position: relative;
            z-index: 1;
            animation: breathe 3s ease-in-out infinite;
        }
        
        @keyframes breathe {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        
        .language-header h1 {
            color: white;
            font-size: 22px;
            font-weight: 700;
            position: relative;
            z-index: 1;
        }
        
        .language-header p {
            color: rgba(255,255,255,0.85);
            font-size: 14px;
            margin-top: 8px;
            position: relative;
            z-index: 1;
        }
        
        .language-body {
            padding: 35px 40px;
        }
        
        .language-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 16px;
            margin-bottom: 25px;
        }
        
        .language-option {
            position: relative;
        }
        
        .language-option input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }
        
        .language-label {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 25px 15px;
            background: var(--light-gray);
            border: 2px solid transparent;
            border-radius: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .language-label:hover {
            background: white;
            border-color: var(--primary-light);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(255, 107, 0, 0.15);
        }
        
        .language-option input:checked + .language-label {
            background: linear-gradient(135deg, #fff5f0, #fff0e6);
            border-color: var(--primary);
            box-shadow: 0 8px 25px rgba(255, 107, 0, 0.2);
        }
        
        .language-option input:checked + .language-label .flag {
            transform: scale(1.15);
        }
        
        .flag {
            font-size: 50px;
            margin-bottom: 4px;
            transition: transform 0.3s ease;
            line-height: 1;
        }
        
        .flag-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 8px;
        }
        
        .flag-img {
            width: 80px;
            height: 53px;
            object-fit: cover;
            border-radius: 6px;
            margin-bottom: 6px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.15);
            transition: transform 0.3s ease;
        }
        
        .language-option input:checked + .language-label .flag-img {
            transform: scale(1.1);
        }
        
        .country-name {
            font-size: 11px;
            color: var(--gray);
            font-weight: 500;
        }
        
        .language-name {
            font-size: 15px;
            font-weight: 600;
            color: var(--secondary);
        }
        
        .language-native {
            font-size: 11px;
            color: var(--gray);
            margin-top: 4px;
        }
        
        .checkbox-icon {
            position: absolute;
            top: 12px;
            right: 12px;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: white;
            border: 2px solid var(--light-gray);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }
        
        .language-option input:checked + .language-label .checkbox-icon {
            background: var(--primary);
            border-color: var(--primary);
        }
        
        .checkbox-icon i {
            color: white;
            font-size: 12px;
            opacity: 0;
            transform: scale(0);
            transition: all 0.3s ease;
        }
        
        .language-option input:checked + .language-label .checkbox-icon i {
            opacity: 1;
            transform: scale(1);
        }
        
        .submit-btn {
            width: 100%;
            padding: 16px;
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            font-family: 'Poppins', sans-serif;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .submit-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }
        
        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 107, 0, 0.35);
        }
        
        .submit-btn:hover::before {
            left: 100%;
        }
        
        .skip-link {
            text-align: center;
            margin-top: 20px;
        }
        
        .skip-link a {
            color: var(--gray);
            font-size: 13px;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .skip-link a:hover {
            color: var(--primary);
        }
        
        @media (max-width: 480px) {
            .language-header {
                padding: 30px 25px 25px;
            }
            
            .language-body {
                padding: 25px;
            }
            
            .language-grid {
                grid-template-columns: 1fr;
            }
            
            .flag {
                font-size: 45px;
            }
        }
    </style>
</head>
<body>
    <div class="language-container">
        <div class="language-card">
            <div class="language-header">
                <div class="step-indicator">
                    <div class="step active"></div>
                    <div class="step"></div>
                </div>
                <img src="{{ asset('logo.png') }}" alt="BiLangue" class="logo">
                <h1>Quelle langue parlez-vous ?</h1>
                <p>Sélectionnez la langue que vous parlant actuellement</p>
            </div>
            
            <div class="language-body">
                <form method="POST" action="{{ route('register.langue-parlee') }}">
                    @csrf
                    
                    <div class="language-grid">
                        <!-- France Flag -->
                        <div class="language-option">
                            <input type="radio" 
                                   id="francais" 
                                   name="langue_parlee" 
                                   value="francais" 
                                   required>
                            <label for="francais" class="language-label">
                                <div class="checkbox-icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="flag-container">
                                    <img src="https://flagcdn.com/w80/fr.png" alt="France" class="flag-img">
                                    <span class="country-name">France</span>
                                </div>
                                <span class="language-name">Français</span>
                                <span class="language-native">French</span>
                            </label>
                        </div>
                        
                        <!-- USA Flag -->
                        <div class="language-option">
                            <input type="radio" 
                                   id="anglais" 
                                   name="langue_parlee" 
                                   value="anglais" 
                                   required>
                            <label for="anglais" class="language-label">
                                <div class="checkbox-icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="flag-container">
                                    <img src="https://flagcdn.com/w80/us.png" alt="États-Unis" class="flag-img">
                                    <span class="country-name">États-Unis</span>
                                </div>
                                <span class="language-name">Anglais</span>
                                <span class="language-native">English</span>
                            </label>
                        </div>
                    </div>
                    
                    <button type="submit" class="submit-btn">
                        Suivant <i class="fas fa-arrow-right"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>


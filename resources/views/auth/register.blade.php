<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - BiLangue</title>
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
        
        .register-container {
            width: 100%;
            max-width: 480px;
        }
        
        .register-card {
            background: var(--white);
            border-radius: 24px;
            box-shadow: var(--shadow);
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .register-card:hover {
            box-shadow: var(--shadow-hover);
            transform: translateY(-5px);
        }
        
        .register-header {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            padding: 40px 40px 50px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .register-header::before {
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
        
        .register-header .logo {
            width: 70px;
            height: 70px;
            background: white;
            border-radius: 20px;
            padding: 12px;
            margin: 0 auto 15px;
            position: relative;
            z-index: 1;
            animation: breathe 3s ease-in-out infinite;
        }
        
        @keyframes breathe {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        
        .register-header h1 {
            color: white;
            font-size: 24px;
            font-weight: 700;
            position: relative;
            z-index: 1;
        }
        
        .register-header p {
            color: rgba(255,255,255,0.85);
            font-size: 14px;
            margin-top: 8px;
            position: relative;
            z-index: 1;
        }
        
        .register-body {
            padding: 35px 40px;
        }
        
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            color: var(--secondary);
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 8px;
        }
        
        .input-wrapper {
            position: relative;
        }
        
        .input-wrapper i {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray);
            font-size: 16px;
            transition: color 0.3s;
        }
        
        .form-group input {
            width: 100%;
            padding: 14px 16px 14px 45px;
            border: 2px solid var(--light-gray);
            border-radius: 12px;
            font-size: 14px;
            font-family: 'Poppins', sans-serif;
            transition: all 0.3s ease;
            background: var(--light-gray);
        }
        
        .form-group input:focus {
            outline: none;
            border-color: var(--primary);
            background: white;
            box-shadow: 0 0 0 4px rgba(255, 107, 0, 0.1);
        }
        
        .form-group input:focus + i,
        .input-wrapper:focus-within i {
            color: var(--primary);
        }
        
        .form-group input::placeholder {
            color: #a0a0a0;
        }
        
        .form-invalid {
            border-color: #dc-group input.is2626;
        }
        
        .error-text {
            color: #dc2626;
            font-size: 12px;
            margin-top: 6px;
            display: flex;
            align-items: center;
            gap: 5px;
        }
        
        .register-btn {
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
            margin-top: 10px;
        }
        
        .register-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }
        
        .register-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 107, 0, 0.35);
        }
        
        .register-btn:hover::before {
            left: 100%;
        }
        
        .register-btn:active {
            transform: translateY(0);
        }
        
        .login-link {
            text-align: center;
            margin-top: 25px;
            padding-top: 25px;
            border-top: 1px solid var(--light-gray);
        }
        
        .login-link p {
            color: var(--gray);
            font-size: 14px;
        }
        
        .login-link a {
            color: var(--primary);
            font-weight: 600;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .login-link a:hover {
            color: var(--primary-dark);
            text-decoration: underline;
        }
        
        .password-requirements {
            background: #f0fdf4;
            border: 1px solid #bbf7d0;
            border-radius: 10px;
            padding: 12px 15px;
            margin-bottom: 20px;
        }
        
        .password-requirements p {
            color: #166534;
            font-size: 12px;
            font-weight: 500;
            margin-bottom: 5px;
        }
        
        .password-requirements ul {
            list-style: none;
            color: #15803d;
            font-size: 11px;
        }
        
        .password-requirements li {
            display: flex;
            align-items: center;
            gap: 6px;
            margin-top: 3px;
        }
        
        @media (max-width: 520px) {
            .register-header {
                padding: 30px 30px 40px;
            }
            
            .register-body {
                padding: 25px;
            }
            
            .form-row {
                grid-template-columns: 1fr;
            }
            
            .register-header h1 {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="register-card">
            <div class="register-header">
                <img src="{{ asset('logo.png') }}" alt="BiLangue" class="logo">
                <h1>Créer un compte</h1>
                <p>Rejoignez BiLangue et apprenez les langues africaines</p>
            </div>
            
            <div class="register-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <div class="input-wrapper">
                                <input type="text" 
                                       id="nom" 
                                       name="nom" 
                                       value="{{ old('nom') }}" 
                                       placeholder="Votre nom"
                                       required 
                                       autofocus
                                       class="{{ $errors->has('nom') ? 'is-invalid' : '' }}">
                                <i class="fas fa-user"></i>
                            </div>
                            @error('nom')
                                <div class="error-text">
                                    <i class="fas fa-exclamation-circle"></i>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="prenom">Prénom</label>
                            <div class="input-wrapper">
                                <input type="text" 
                                       id="prenom" 
                                       name="prenom" 
                                       value="{{ old('prenom') }}" 
                                       placeholder="Votre prénom"
                                       required
                                       class="{{ $errors->has('prenom') ? 'is-invalid' : '' }}">
                                <i class="fas fa-user"></i>
                            </div>
                            @error('prenom')
                                <div class="error-text">
                                    <i class="fas fa-exclamation-circle"></i>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Adresse email</label>
                        <div class="input-wrapper">
                            <input type="email" 
                                   id="email" 
                                   name="email" 
                                   value="{{ old('email') }}" 
                                   placeholder="exemple@email.com"
                                   required
                                   class="{{ $errors->has('email') ? 'is-invalid' : '' }}">
                            <i class="fas fa-envelope"></i>
                        </div>
                        @error('email')
                            <div class="error-text">
                                <i class="fas fa-exclamation-circle"></i>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <div class="input-wrapper">
                            <input type="password" 
                                   id="password" 
                                   name="password" 
                                   placeholder="••••••••"
                                   required
                                   class="{{ $errors->has('password') ? 'is-invalid' : '' }}">
                            <i class="fas fa-lock"></i>
                        </div>
                        @error('password')
                            <div class="error-text">
                                <i class="fas fa-exclamation-circle"></i>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="password_confirmation">Confirmer le mot de passe</label>
                        <div class="input-wrapper">
                            <input type="password" 
                                   id="password_confirmation" 
                                   name="password_confirmation" 
                                   placeholder="••••••••"
                                   required>
                            <i class="fas fa-lock"></i>
                        </div>
                    </div>
                    
                    <div class="password-requirements">
                        <p><i class="fas fa-info-circle"></i> Requirements du mot de passe:</p>
                        <ul>
                            <li><i class="fas fa-check"></i> Minimum 8 caractères</li>
                            <li><i class="fas fa-check"></i> Doit contenir une confirmation</li>
                        </ul>
                    </div>
                    
                    <button type="submit" class="register-btn">
                        <i class="fas fa-user-plus"></i> S'inscrire
                    </button>
                </form>
                
                <div class="login-link">
                    <p>Déjà inscrit ? <a href="{{ route('login') }}">Se connecter</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


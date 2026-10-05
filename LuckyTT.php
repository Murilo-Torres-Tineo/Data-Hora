<?php
$cities = [
    'Tokyo' => [
        'label' => 'Tóquio - Japão',
        'country' => 'Japão',
        'timezone' => 'Asia/Tokyo',
    ],
    'NewYork' => [
        'label' => 'Nova York - Estados Unidos',
        'country' => 'Estados Unidos',
        'timezone' => 'America/New_York',
    ],
    'Paris' => [
        'label' => 'Paris - França',
        'country' => 'França',
        'timezone' => 'Europe/Paris',
    ],
    'London' => [
        'label' => 'Londres - Inglaterra',
        'country' => 'Inglaterra',
        'timezone' => 'Europe/London',
    ],
    'Sydney' => [
        'label' => 'Sydney - Austrália',
        'country' => 'Austrália',
        'timezone' => 'Australia/Sydney',
    ],
    'Dubai' => [
        'label' => 'Dubai - Emirados Árabes',
        'country' => 'Emirados Árabes',
        'timezone' => 'Asia/Dubai',
    ],
];

$selectedCity = $_GET['city'] ?? 'Tokyo';
$selected = $cities[$selectedCity] ?? $cities['Tokyo'];

$timezone = new DateTimeZone($selected['timezone']);
$now = new DateTime('now', $timezone);
$currentDate = $now->format('d/m/Y');
$currentTime = $now->format('H:i:s');
$currentWeekday = $now->format('l');

$weekdayMap = [
    'Monday' => 'Segunda-feira',
    'Tuesday' => 'Terça-feira',
    'Wednesday' => 'Quarta-feira',
    'Thursday' => 'Quinta-feira',
    'Friday' => 'Sexta-feira',
    'Saturday' => 'Sábado',
    'Sunday' => 'Domingo',
];

$weekdayName = $weekdayMap[$currentWeekday] ?? $currentWeekday;
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lucky's Travel Time</title>
    <meta name="description"
        content="Travel Time Agência de Viagens. Consulte horários de destinos internacionais e planeje sua próxima viagem com segurança.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <header class="site-header">
        <div class="container header-inner">
            <div class="brand" aria-label="Travel Time logo">
                <div class="brand__icon">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M3 12c1.8-4 5.3-6 9-6s7.2 2 9 6c-1.8 4-5.3 6-9 6s-7.2-2-9-6Z" stroke="currentColor"
                            stroke-width="1.7" />
                        <path d="M12 6v12M3 12h18" stroke="currentColor" stroke-width="1.7" />
                        <path
                            d="m18.5 5.5-2.3 2.3 2.8 1.9-1.6 2.1-4.2-1.9-1 3.1-2.8-1.4 1.3-3.6-3.9-2.1 2.7-1.5 3 1.4 1.4-3.2 2.9 1.4Z"
                            fill="currentColor" opacity="0.9" />
                    </svg>
                </div>
                <div class="brand__text">
                    <span class="brand__travel">TRAVEL</span>
                    <span class="brand__time">TIME</span>
                    <small>AGÊNCIA DE VIAGENS</small>
                </div>
            </div>

            <div class="mobile-menu">
                <input type="checkbox" id="nav-toggle" class="nav-toggle">
                <label for="nav-toggle" class="nav-toggle-label" aria-label="Abrir menu"><span></span></label>
                <nav class="nav" aria-label="Navegação principal">
                    <a href="#inicio" class="active">Início</a>
                    <a href="#destinos">Destinos</a>
                    <a href="#horarios">Horários</a>
                    <a href="#minha-viagem">Minha Viagem</a>
                    <a href="#contato">Contato</a>
                </nav>
            </div>

            <div class="header-callout">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M2 16.5 8 9l4 3 8-8 2 2v10.5H2Z" stroke="currentColor" stroke-width="1.7"
                        stroke-linejoin="round" />
                    <path d="M2 18.5h20" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                </svg>
                <span>Explore o mundo com a Travel Time!</span>
            </div>
        </div>
    </header>

    <main>
        <section class="hero" id="inicio">
            <div class="container hero__inner">
                <div class="hero__content">
                    <h1>
                        <span class="travel">TRAVEL</span>
                        <span class="time">TIME</span>
                    </h1>
                    <p class="hero__subtitle">Sua viagem começa antes mesmo do embarque.</p>
                    <p class="hero__description">
                        Descubra o horário atual dos principais destinos turísticos do mundo e planeje sua viagem com
                        mais segurança e tranquilidade.
                    </p>
                    <div class="hero__actions">
                        <a class="primary-btn" href="#horarios">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path d="M2 16.5 8 9l4 3 8-8 2 2v10.5H2Z" stroke="currentColor" stroke-width="1.7"
                                    stroke-linejoin="round" />
                                <path d="M2 18.5h20" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                            </svg>
                            Consultar horários
                        </a>
                    </div>
                </div>

                <aside class="consult-card" id="horarios" aria-label="Consulta de horários por destino">
                    <div class="consult-card__header">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <circle cx="11" cy="11" r="6" stroke="currentColor" stroke-width="1.8" />
                            <path d="M16 16l5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                        </svg>
                        <span>Consulte um destino</span>
                    </div>

                    <div class="consult-card__body">
                        <p>Selecione um país ou cidade para ver o horário atual.</p>

                        <form class="consult-form" method="get" action="#horarios">
                            <label for="city">Destino</label>
                            <select id="city" name="city" aria-label="Selecione a cidade">
                                <?php foreach ($cities as $key => $data): ?>
                                    <option value="<?php echo htmlspecialchars($key); ?>" <?php echo ($selectedCity === $key) ? 'selected' : ''; ?>>
                                        <?php echo htmlspecialchars($data['label']); ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>

                            <button type="submit" class="consult-btn">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                    aria-hidden="true">
                                    <circle cx="12" cy="12" r="7" stroke="currentColor" stroke-width="1.8" />
                                    <path d="M12 8v4l3 2" stroke="currentColor" stroke-width="1.8"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                Consultar horário
                            </button>
                        </form>

                        <div class="consult-tip">
                            <div class="lamp-icon" aria-hidden="true">💡</div>
                            <div>
                                <h4>Por que consultar o horário?</h4>
                                <p>Evite imprevistos, planeje seus voos, reuniões e passeios sabendo o horário atual do
                                    seu destino em tempo real.</p>
                            </div>
                        </div>

                        <div class="time-result">
                            <h4>Horário atual em <?php echo htmlspecialchars($selected['label']); ?></h4>
                            <p class="time-result__clock"><?php echo $currentTime; ?></p>
                            <p class="time-result__meta"><?php echo $weekdayName; ?> • <?php echo $currentDate; ?></p>
                            <div class="time-result__zone"><?php echo htmlspecialchars($selected['timezone']); ?></div>
                        </div>
                    </div>
                </aside>
            </div>
        </section>

        <section class="destinations" id="destinos">
            <div class="container">
                <div class="section-head">
                    <div class="eyebrow">Destinos em destaque</div>
                    <h2>Conheça alguns dos nossos destinos</h2>
                </div>

                <div class="destination-grid">
                    <article class="destination-card">
                        <div class="destination-card__image"
                            style="background-image: url('https://images.unsplash.com/photo-1499092346589-b9b6be3e94b2?auto=format&fit=crop&w=800&q=80');">
                        </div>
                        <div class="destination-card__content">
                            <h3 class="destination-card__name">Nova York</h3>
                            <div class="destination-card__meta"><span class="card-flag">🇺🇸</span><span>Estados
                                    Unidos</span></div>
                        </div>
                    </article>

                    <article class="destination-card">
                        <div class="destination-card__image"
                            style="background-image: url('https://images.unsplash.com/photo-1502602898657-3e91760cbb34?auto=format&fit=crop&w=800&q=80');">
                        </div>
                        <div class="destination-card__content">
                            <h3 class="destination-card__name">Paris</h3>
                            <div class="destination-card__meta"><span class="card-flag">🇫🇷</span><span>França</span>
                            </div>
                        </div>
                    </article>

                    <article class="destination-card">
                        <div class="destination-card__image"
                            style="background-image: url('https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?auto=format&fit=crop&w=800&q=80');">
                        </div>
                        <div class="destination-card__content">
                            <h3 class="destination-card__name">Londres</h3>
                            <div class="destination-card__meta"><span
                                    class="card-flag">🇬🇧</span><span>Inglaterra</span></div>
                        </div>
                    </article>

                    <article class="destination-card">
                        <div class="destination-card__image"
                            style="background-image: url('https://images.unsplash.com/photo-1540959733332-eab4deabeeaf?auto=format&fit=crop&w=800&q=80');">
                        </div>
                        <div class="destination-card__content">
                            <h3 class="destination-card__name">Tóquio</h3>
                            <div class="destination-card__meta"><span class="card-flag">🇯🇵</span><span>Japão</span>
                            </div>
                        </div>
                    </article>

                    <article class="destination-card">
                        <div class="destination-card__image"
                            style="background-image: url('https://images.unsplash.com/photo-1506973035872-a4ec16b8e8d9?auto=format&fit=crop&w=800&q=80');">
                        </div>
                        <div class="destination-card__content">
                            <h3 class="destination-card__name">Sydney</h3>
                            <div class="destination-card__meta"><span
                                    class="card-flag">🇦🇺</span><span>Austrália</span></div>
                        </div>
                    </article>

                    <article class="destination-card">
                        <div class="destination-card__image"
                            style="background-image: url('https://images.unsplash.com/photo-1512453979798-5ea266f8880c?auto=format&fit=crop&w=800&q=80');">
                        </div>
                        <div class="destination-card__content">
                            <h3 class="destination-card__name">Dubai</h3>
                            <div class="destination-card__meta"><span class="card-flag">🇦🇪</span><span>Emirados
                                    Árabes</span></div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="benefits" id="minha-viagem">
            <div class="container benefits__grid">
                <article class="benefit">
                    <div class="benefit__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 12c1.8-4 5.3-6 9-6s7.2 2 9 6c-1.8 4-5.3 6-9 6s-7.2-2-9-6Z" stroke="currentColor"
                                stroke-width="1.7" />
                            <path d="M12 6v12M3 12h18" stroke="currentColor" stroke-width="1.7" />
                        </svg>
                    </div>
                    <h3>Horários do mundo</h3>
                    <p>Consulte o horário atual de vários países.</p>
                </article>

                <article class="benefit">
                    <div class="benefit__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 15.5 8 9l4 3 8-8 2 2v10.5H2Z" stroke="currentColor" stroke-width="1.7" />
                            <path d="M2 18.5h20" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                        </svg>
                    </div>
                    <h3>Planeje sua viagem</h3>
                    <p>Organize seus horários e evite imprevistos.</p>
                </article>

                <article class="benefit">
                    <div class="benefit__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="3" y="4" width="18" height="17" rx="2.5" stroke="currentColor"
                                stroke-width="1.7" />
                            <path d="M8 2v4M16 2v4M3 9h18" stroke="currentColor" stroke-width="1.7"
                                stroke-linecap="round" />
                        </svg>
                    </div>
                    <h3>Destinos incríveis</h3>
                    <p>Explore os melhores destinos internacionais.</p>
                </article>

                <article class="benefit">
                    <div class="benefit__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 3.5 18 6v5c0 4-2.4 7.1-6 9.5-3.6-2.4-6-5.5-6-9.5V6l6-2.5Z"
                                stroke="currentColor" stroke-width="1.7" />
                            <path d="M9.5 11.5h5v5h-5z" stroke="currentColor" stroke-width="1.7" />
                        </svg>
                    </div>
                    <h3>Viagem com segurança</h3>
                    <p>Informação confiável para sua tranquilidade.</p>
                </article>
            </div>
        </section>
    </main>

    <footer class="site-footer" id="contato">
        <div class="container">
            © 2026 Travel Time • Agência de Viagens • Sua próxima aventura começa aqui.
        </div>
    </footer>
</body>

</html>
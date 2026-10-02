<!DOCTYPE html>
<html lang="si">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>කළමනාකරණ සංවර්ධන හා පුහුණු ඒකකය | MDTU</title>

    <meta name="description" content="කළමනාකරණ සංවර්ධන හා පුහුණු ඒකකය - වයඹ පළාත">
    <meta name="robots" content="index, follow">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            font-family: "Noto Sans Sinhala", "Noto Sans Tamil",
                         "Segoe UI", Arial, sans-serif;
            background:
                radial-gradient(circle at top left, rgba(59,130,246,0.12), transparent 35%),
                radial-gradient(circle at bottom right, rgba(139,92,246,0.12), transparent 35%),
                linear-gradient(135deg, #f8fafc, #eef2ff);

            color: #1e293b;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 25px;
        }

        .page {
            width: 100%;
            max-width: 1050px;
            background: rgba(255,255,255,0.94);
            border-radius: 28px;
            overflow: hidden;

            box-shadow:
                0 25px 70px rgba(15, 23, 42, 0.15),
                0 5px 20px rgba(15, 23, 42, 0.06);

            position: relative;
        }

        /* Top decorative line */
        .top-line {
            height: 7px;
            background: linear-gradient(
                90deg,
                #2563eb,
                #7c3aed,
                #db2777,
                #2563eb
            );
            background-size: 300% 100%;
            animation: gradientMove 7s ease infinite;
        }

        @keyframes gradientMove {
            0%   { background-position: 0% 50%; }
            50%  { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .content {
            padding: 55px 70px 45px;
            text-align: center;
        }

        /* Logo */
        .logo-wrapper {
            width: 150px;
            height: 150px;
            margin: 0 auto 28px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #ffffff;
            border-radius: 50%;

            padding: 10px;

            box-shadow:
                0 12px 35px rgba(30, 64, 175, 0.15),
                0 0 0 8px rgba(59, 130, 246, 0.05);

            animation: logoFloat 4s ease-in-out infinite;
        }

        .logo-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            border-radius: 50%;
        }

        @keyframes logoFloat {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-6px);
            }
        }

        /* Welcome */
        .welcome {
            font-size: clamp(1.5rem, 3vw, 2.15rem);
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 10px;
        }

        .unit-name {
            font-size: clamp(1.15rem, 2.5vw, 1.65rem);
            font-weight: 700;
            color: #334155;
            line-height: 1.6;
            margin-bottom: 35px;
        }

        /* Language blocks */
        .language-section {
            border-top: 1px solid #e2e8f0;
            padding: 28px 20px;
        }

        .language-title {
            display: inline-block;
            font-size: 0.82rem;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            color: #64748b;
            margin-bottom: 12px;
        }

        .notice-title {
            font-size: clamp(1.25rem, 2.5vw, 1.55rem);
            font-weight: 800;
            color: #b45309;
            margin-bottom: 14px;
        }

        .notice-text {
            max-width: 850px;
            margin: auto;
            font-size: clamp(1rem, 2vw, 1.15rem);
            line-height: 2;
            color: #475569;
        }

        /* English */
        .english {
            font-family: "Segoe UI", Arial, sans-serif;
        }

        /* Footer */
        .footer {
            background: #f8fafc;
            border-top: 1px solid #e2e8f0;
            padding: 24px 20px;
            text-align: center;
        }

        .footer-main {
            font-size: 0.95rem;
            font-weight: 700;
            color: #334155;
        }

        .footer-sub {
            margin-top: 7px;
            font-size: 0.85rem;
            color: #64748b;
        }

        .date-badge {
            display: inline-block;
            margin-top: 22px;
            padding: 9px 18px;
            border-radius: 50px;
            background: #eff6ff;
            color: #1d4ed8;
            border: 1px solid #bfdbfe;
            font-size: 0.9rem;
            font-weight: 700;
        }

        /* Decorative circles */
        .circle {
            position: absolute;
            border-radius: 50%;
            pointer-events: none;
            opacity: 0.5;
        }

        .circle-one {
            width: 180px;
            height: 180px;
            background: rgba(59,130,246,0.06);
            top: -80px;
            right: -60px;
        }

        .circle-two {
            width: 130px;
            height: 130px;
            background: rgba(139,92,246,0.06);
            bottom: 80px;
            left: -65px;
        }

        /* Mobile */
        @media (max-width: 700px) {

            body {
                padding: 12px;
                align-items: flex-start;
            }

            .page {
                border-radius: 20px;
                margin-top: 10px;
            }

            .content {
                padding: 40px 20px 30px;
            }

            .logo-wrapper {
                width: 125px;
                height: 125px;
                margin-bottom: 22px;
            }

            .welcome {
                line-height: 1.5;
            }

            .unit-name {
                margin-bottom: 25px;
            }

            .language-section {
                padding: 24px 8px;
            }

            .notice-text {
                line-height: 1.9;
            }

            .footer {
                padding: 20px 15px;
            }
        }

        /* Very small phones */
        @media (max-width: 380px) {

            body {
                padding: 7px;
            }

            .content {
                padding: 30px 15px 25px;
            }

            .logo-wrapper {
                width: 105px;
                height: 105px;
            }

            .language-section {
                padding-left: 3px;
                padding-right: 3px;
            }
        }
    </style>
</head>

<body>

    <main class="page">

        <div class="top-line"></div>

        <div class="circle circle-one"></div>
        <div class="circle circle-two"></div>

        <section class="content">

            <!-- Logo -->
            <div class="logo-wrapper">
                <img src="img/logo.jpg"
                     alt="Management Development and Training Unit Logo">
            </div>

            <!-- Sinhala -->
            <div class="welcome">
                සාදරයෙන් පිළිගනිමු.
            </div>

            <div class="unit-name">
                කළමනාකරණ සංවර්ධන හා පුහුණු ඒකකය
            </div>

            <div class="language-section">



                <div class="notice-title">
                    කාරුණික නිවේදනයයි.
                </div>

                <p class="notice-text">
                    අපගේ මෙම mdtu.nw.gov.lk වෙබ් අඩවිය යාවත්කාලීන කිරීමක්
                    සිදු කරනු ලබන බැවින් පුහුණු සඳහා ඉල්ලුම් කිරීම
                    2026-10-06 වනදා තෙක් වෙබ් අඩවිය මඟින් සිදු කළ නොහැකි බව
                    කාරුණිකව දන්වා සිටිමු.
                </p>

            </div>


            <!-- Tamil -->
            <div class="language-section">

                

                <div class="notice-title">
                    கனிவான அறிவித்தல்.
                </div>

                <p class="notice-text">
                    எமது mdtu.nw.gov.lk இணையத்தளம் தற்போது புதுப்பிக்கப்பட்டு
                    வருவதால், பயிற்சிகளுக்கான விண்ணப்பங்களை
                    2026-10-06 ஆம் திகதி வரை இணையத்தளத்தின் ஊடாக
                    சமர்ப்பிக்க முடியாது என்பதை கனிவுடன் அறியத்தருகின்றோம்.
                </p>

            </div>


            <!-- English -->
            <div class="language-section english">

             

                <div class="notice-title">
                    Kind Notice
                </div>

                <p class="notice-text">
                    Please be kindly informed that applications for training
                    programmes cannot be submitted through our
                    mdtu.nw.gov.lk website until 06 October 2026,
                    as the website is currently undergoing an update.
                </p>

                <div class="date-badge">
                    Applications unavailable until 06 October 2026
                </div>

            </div>

        </section>


        <!-- Footer -->
        <footer class="footer">

            <div class="footer-main">
                තොරතුරු හා සන්නිවේදන තාක්ෂණ අංශය
            </div>

            <div class="footer-sub">
                වයඹ ප්‍රධාන ලේකම් කාර්යාලය
            </div>

            <div class="footer-sub english">
                Information and Communication Technology Unit
                <br>
                Chief Secretariat – North Western Province
            </div>

        </footer>

    </main>

</body>
</html>

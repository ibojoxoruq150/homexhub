<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeXHub - Fresh Food Delivery Services | Order Online Today</title>
    <meta name="description" content="HomeXHub delivers fresh, delicious meals straight to your door. Experience convenient food delivery with our extensive menu of local favorites. Click here to continue exploring our amazing selection of dishes and start your culinary journey today.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .main-container-xyz789 {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .header-section-abc123 {
            background: rgba(255, 255, 255, 0.95);
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .nav-container-def456 {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo-brand-ghi789 {
            font-size: 2rem;
            font-weight: bold;
            color: #764ba2;
            text-decoration: none;
        }

        .navigation-menu-jkl012 {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-link-mno345 {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s ease;
            cursor: pointer;
        }

        .nav-link-mno345:hover {
            color: #764ba2;
        }

        .hero-banner-pqr678 {
            margin-top: 80px;
            padding: 4rem 2rem;
            text-align: center;
            color: white;
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://images.pexels.com/photos/1640777/pexels-photo-1640777.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
            background-size: cover;
            background-position: center;
            min-height: 60vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .hero-title-stu901 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero-subtitle-vwx234 {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .cta-button-yzab567 {
            background: #ff6b6b;
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            margin: 0.5rem;
        }

        .cta-button-yzab567:hover {
            background: #ff5252;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 107, 107, 0.4);
        }

        .content-section-cdef890 {
            background: white;
            padding: 4rem 2rem;
        }

        .container-wrapper-ghij123 {
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-title-klmn456 {
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 3rem;
            color: #333;
            position: relative;
        }

        .section-title-klmn456::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: #ff6b6b;
        }

        .features-grid-opqr789 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 4rem;
        }

        .feature-card-stuv012 {
            background: #f8f9fa;
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            transition: transform 0.3s ease;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .feature-card-stuv012:hover {
            transform: translateY(-5px);
        }

        .feature-icon-wxyz345 {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: #764ba2;
        }

        .feature-title-abcd678 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #333;
        }

        .feature-description-efgh901 {
            color: #666;
            line-height: 1.8;
        }

        .about-section-ijkl234 {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            color: white;
            padding: 4rem 2rem;
        }

        .about-content-mnop567 {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }

        .about-text-qrst890 {
            font-size: 1.2rem;
            line-height: 1.8;
            margin-bottom: 2rem;
        }

        .history-timeline-uvwx123 {
            background: white;
            padding: 4rem 2rem;
        }

        .timeline-item-yzab456 {
            display: flex;
            margin-bottom: 3rem;
            align-items: center;
        }

        .timeline-year-cdef789 {
            background: #764ba2;
            color: white;
            padding: 1rem;
            border-radius: 50%;
            font-weight: bold;
            margin-right: 2rem;
            min-width: 80px;
            text-align: center;
        }

        .timeline-content-ghij012 {
            flex: 1;
            background: #f8f9fa;
            padding: 2rem;
            border-radius: 10px;
        }

        .reviews-section-klmn345 {
            background: #f8f9fa;
            padding: 4rem 2rem;
        }

        .reviews-grid-opqr678 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .review-card-stuv901 {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .review-stars-wxyz234 {
            color: #ffd700;
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        .review-text-abcd567 {
            font-style: italic;
            margin-bottom: 1rem;
            color: #666;
        }

        .reviewer-name-efgh890 {
            font-weight: bold;
            color: #333;
        }

        .services-showcase-ijkl123 {
            background: white;
            padding: 4rem 2rem;
        }

        .service-item-mnop456 {
            display: flex;
            align-items: center;
            margin-bottom: 3rem;
            gap: 2rem;
        }

        .service-image-qrst789 {
            flex: 1;
            max-width: 400px;
        }

        .service-image-qrst789 img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 15px;
        }

        .service-content-uvwx012 {
            flex: 1;
        }

        .service-title-yzab345 {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: #333;
        }

        .service-description-cdef678 {
            color: #666;
            line-height: 1.8;
            margin-bottom: 1.5rem;
        }

        .footer-section-ghij901 {
            background: #333;
            color: white;
            padding: 3rem 2rem 1rem;
        }

        .footer-content-klmn234 {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .footer-column-opqr567 {
            margin-bottom: 2rem;
        }

        .footer-title-stuv890 {
            font-size: 1.3rem;
            margin-bottom: 1rem;
            color: #ff6b6b;
        }

        .footer-link-wxyz123 {
            color: #ccc;
            text-decoration: none;
            display: block;
            margin-bottom: 0.5rem;
            transition: color 0.3s ease;
        }

        .footer-link-wxyz123:hover {
            color: #ff6b6b;
        }

        .phone-link-abcd456 {
            color: #ff6b6b;
            text-decoration: none;
            font-weight: bold;
        }

        .copyright-bar-efgh789 {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid #555;
            color: #ccc;
        }

        .modal-overlay-ijkl012 {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            z-index: 2000;
        }

        .modal-content-mnop345 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 2rem;
            border-radius: 15px;
            max-width: 600px;
            max-height: 80vh;
            overflow-y: auto;
            width: 90%;
        }

        .modal-close-qrst678 {
            position: absolute;
            top: 10px;
            right: 15px;
            background: none;
            border: none;
            font-size: 2rem;
            cursor: pointer;
            color: #999;
        }

        .modal-title-uvwx901 {
            font-size: 1.8rem;
            margin-bottom: 1rem;
            color: #333;
        }

        .modal-text-yzab234 {
            color: #666;
            line-height: 1.6;
            margin-bottom: 1rem;
        }

        .specialty-section-cdef567 {
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            padding: 4rem 2rem;
        }

        .specialty-grid-ghij890 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .specialty-card-klmn123 {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            backdrop-filter: blur(10px);
        }

        .process-section-opqr456 {
            background: white;
            padding: 4rem 2rem;
        }

        .process-steps-stuv789 {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 2rem;
        }

        .process-step-wxyz012 {
            text-align: center;
            flex: 1;
            min-width: 200px;
        }

        .step-number-abcd345 {
            background: #ff6b6b;
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: bold;
            margin: 0 auto 1rem;
        }

        .commitment-section-efgh678 {
            background: #f8f9fa;
            padding: 4rem 2rem;
        }

        .commitment-content-ijkl901 {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }

        .highlight-box-mnop234 {
            background: linear-gradient(135deg, #ff6b6b, #ffa726);
            color: white;
            padding: 2rem;
            border-radius: 15px;
            margin: 2rem 0;
        }

        @media (max-width: 768px) {
            .hero-title-stu901 {
                font-size: 2.5rem;
            }
            
            .timeline-item-yzab456 {
                flex-direction: column;
                text-align: center;
            }
            
            .timeline-year-cdef789 {
                margin-right: 0;
                margin-bottom: 1rem;
            }
            
            .service-item-mnop456 {
                flex-direction: column;
            }
            
            .process-steps-stuv789 {
                flex-direction: column;
            }
        }
    </style>

<style>       
        .cookie-consent-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.3s ease-out;
        }

        .cookie-consent-modal {
            background: white;
            border-radius: 12px;
            padding: 30px;
            max-width: 500px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            transform: scale(0.9);
            animation: slideIn 0.3s ease-out forwards;
        }

        .cookie-consent-title {
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 15px;
            text-align: center;
        }

        .cookie-consent-text {
            color: #555;
            line-height: 1.6;
            margin-bottom: 25px;
            text-align: center;
        }

        .cookie-consent-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cookie-btn {
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            min-width: 120px;
        }

        .cookie-btn-accept {
            background: #27ae60;
            color: white;
        }

        .cookie-btn-accept:hover {
            background: #219a52;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(39, 174, 96, 0.3);
        }

        .cookie-btn-deny {
            background: #e74c3c;
            color: white;
        }

        .cookie-btn-deny:hover {
            background: #c0392b;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(231, 76, 60, 0.3);
        }

        .cookie-status {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 10px 15px;
            border-radius: 6px;
            color: white;
            font-weight: 500;
            z-index: 10000;
            animation: slideInRight 0.3s ease-out;
        }

        .status-accepted {
            background: #27ae60;
        }

        .status-denied {
            background: #e74c3c;
        }

        .hidden {
            display: none !important;
        }

        .consent-active {
            overflow: hidden;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { 
                transform: scale(0.9) translateY(-20px);
                opacity: 0;
            }
            to { 
                transform: scale(1) translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            from { 
                transform: translateX(100%);
                opacity: 0;
            }
            to { 
                transform: translateX(0);
                opacity: 1;
            }
        }

        @media (max-width: 600px) {
            .cookie-consent-buttons {
                flex-direction: column;
            }
            
            .cookie-btn {
                width: 100%;
            }
        }
    </style>
    
</head>

<script>
document.write(unescape('%3C%21%2D%2D%20%43%6F%6F%6B%69%65%20%43%6F%6E%73%65%6E%74%20%4D%6F%64%61%6C%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6F%76%65%72%6C%61%79%22%3E%0A%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%68%32%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%69%74%6C%65%22%3E%57%65%20%55%73%65%20%43%6F%6F%6B%69%65%73%3C%2F%68%32%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%70%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%65%78%74%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%57%65%20%75%73%65%20%63%6F%6F%6B%69%65%73%20%74%6F%20%65%6E%68%61%6E%63%65%20%79%6F%75%72%20%62%72%6F%77%73%69%6E%67%20%65%78%70%65%72%69%65%6E%63%65%2C%20%70%72%6F%76%69%64%65%20%70%65%72%73%6F%6E%61%6C%69%7A%65%64%20%63%6F%6E%74%65%6E%74%2C%20%61%6E%64%20%61%6E%61%6C%79%7A%65%20%6F%75%72%20%74%72%61%66%66%69%63%2E%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%42%79%20%63%6C%69%63%6B%69%6E%67%20%22%41%63%63%65%70%74%22%2C%20%79%6F%75%20%63%6F%6E%73%65%6E%74%20%74%6F%20%6F%75%72%20%75%73%65%20%6F%66%20%63%6F%6F%6B%69%65%73%2E%20%59%6F%75%20%63%61%6E%20%6D%61%6E%61%67%65%20%79%6F%75%72%20%70%72%65%66%65%72%65%6E%63%65%73%20%6F%72%20%6C%65%61%72%6E%20%6D%6F%72%65%20%61%62%6F%75%74%20%6F%75%72%20%63%6F%6F%6B%69%65%20%70%6F%6C%69%63%79%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%70%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%62%75%74%74%6F%6E%73%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%61%63%63%65%70%74%22%20%6F%6E%63%6C%69%63%6B%3D%22%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%41%63%63%65%70%74%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%64%65%6E%79%22%20%6F%6E%63%6C%69%63%6B%3D%22%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%44%65%6E%79%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%21%2D%2D%20%53%74%61%74%75%73%20%4E%6F%74%69%66%69%63%61%74%69%6F%6E%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%53%74%61%74%75%73%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%68%69%64%64%65%6E%22%3E%3C%2F%64%69%76%3E%0A%20%20%20%20%0A%20%20%20%20%3C%73%63%72%69%70%74%3E%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6F%6F%6B%69%65%20%63%6F%6E%73%65%6E%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%6C%65%74%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%6C%65%74%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%45%6E%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%73%68%6F%77%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%44%69%73%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%68%69%64%64%65%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%53%74%61%74%75%73%28%6D%65%73%73%61%67%65%2C%20%74%79%70%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%74%20%73%74%61%74%75%73%45%6C%20%3D%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%53%74%61%74%75%73%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%74%65%78%74%43%6F%6E%74%65%6E%74%20%3D%20%6D%65%73%73%61%67%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4E%61%6D%65%20%3D%20%60%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%73%74%61%74%75%73%2D%24%7B%74%79%70%65%7D%60%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%69%64%65%20%73%74%61%74%75%73%20%61%66%74%65%72%20%33%20%73%65%63%6F%6E%64%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%33%30%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%3%20%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%27%2C%20%27%61%63%63%65%70%74%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%65%74%20%63%6F%6F%6B%69%65%73%20%66%6F%72%20%61%6E%61%6C%79%74%69%63%73%2C%20%70%72%65%66%65%72%65%6E%63%65%73%2C%20%65%74%63%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%49%6E%69%74%69%61%6C%69%7A%65%20%74%72%61%63%6B%69%6E%67%20%73%63%72%69%70%74%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%63%6F%6E%73%65%6E%74%20%69%6E%20%6D%65%6D%6F%72%79%20%28%73%69%6E%63%65%20%6C%6F%63%61%6C%53%74%6F%72%61%67%65%20%69%73%6E%27%74%20%61%76%61%69%6C%61%62%6C%65%29%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%20%2D%20%69%6E%69%74%69%61%6C%69%7A%69%6E%67%20%74%72%61%63%6B%69%6E%67%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%7%20%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%27%2C%20%27%64%65%6E%69%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%44%69%73%61%62%6C%65%20%6E%6F%6E%2D%65%73%73%65%6E%74%69%61%6C%20%63%6F%6F%6B%69%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%52%75%6E%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%64%65%6E%69%61%6C%20%70%72%65%66%65%72%65%6E%63%65%20%69%6E%20%6D%65%6D%6F%72%79%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%20%2D%20%72%75%6E%6E%69%6E%67%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%4D%6F%75%73%65%20%6D%6F%76%65%20%72%65%64%69%72%65%63%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%61%6E%64%6C%65%4D%6F%75%73%65%4D%6F%76%65%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%52%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%20%77%68%65%6E%20%6D%6F%75%73%65%20%6D%6F%76%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%30%39%30%31%65%33%33%30%33%65%63%68%6F%34%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%6D%6F%75%73%65%20%6D%6F%76%65%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6D%6F%75%73%65%6D%6F%76%65%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%30%39%30%31%65%33%33%30%33%65%63%68%6F%34%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%63%6C%69%63%6B%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%63%6F%6F%6B%69%65%63%68%65%63%6B%2E%70%68%70%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%30%39%30%31%65%33%33%30%33%65%63%68%6F%34%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%50%72%65%76%65%6E%74%20%6D%6F%64%61%6C%20%66%72%6F%6D%20%63%6C%6F%73%69%6E%67%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%6E%20%69%74%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%71%75%65%72%79%53%65%6C%65%63%74%6F%72%28%27%2E%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%65%2E%73%74%6F%70%50%72%6F%70%61%67%61%74%69%6F%6E%28%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6C%6F%73%65%20%6D%6F%64%61%6C%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%76%65%72%6C%61%79%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%74%61%72%67%65%74%20%3D%3D%3D%20%74%68%69%73%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%63%6C%6F%73%65%20%6F%6E%20%6F%76%65%72%6C%61%79%20%63%6C%69%63%6B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%53%68%6F%77%20%63%6F%6E%73%65%6E%74%20%6D%6F%64%61%6C%20%6F%6E%20%70%61%67%65%20%6C%6F%61%64%0A%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6C%6F%61%64%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%53%6D%61%6C%6C%20%64%65%6C%61%79%20%66%6F%72%20%62%65%74%74%65%72%20%55%58%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%35%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%48%61%6E%64%6C%65%20%45%53%43%20%6B%65%79%20%74%6F%20%63%6C%6F%73%65%20%6D%6F%64%61%6C%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6B%65%79%64%6F%77%6E%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%6B%65%79%20%3D%3D%3D%20%27%45%73%63%61%70%65%27%20%26%26%20%21%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%63%6F%6E%74%61%69%6E%73%28%27%68%69%64%64%65%6E%27%29%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%61%6C%6C%6F%77%20%45%53%43%20%74%6F%20%63%6C%6F%73%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%20%20%20%20%3C%2F%73%63%72%69%70%74%3E%0A'));
</script>

<body class="main-container-xyz789">
    <header class="header-section-abc123">
        <nav class="nav-container-def456">
            <a href="#" class="logo-brand-ghi789">HomeXHub</a>
            <ul class="navigation-menu-jkl012">
                <li><a href="#hero" class="nav-link-mno345">Home</a></li>
                <li><a href="#services" class="nav-link-mno345">Our Services</a></li>
                <li><a href="#specialties" class="nav-link-mno345">Specialties</a></li>
                <li><a href="#process" class="nav-link-mno345">How It Works</a></li>
                <li><a href="#history" class="nav-link-mno345">Our Story</a></li>
                <li><a href="#commitment" class="nav-link-mno345">Our Commitment</a></li>
                <li><a href="#reviews" class="nav-link-mno345">Reviews</a></li>
                <li><a href="#contact" class="nav-link-mno345">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="hero" class="hero-banner-pqr678">
        <h1 class="hero-title-stu901">Fresh Food Delivered Fast</h1>
        <p class="hero-subtitle-vwx234">Experience the convenience of having delicious, freshly prepared meals delivered straight to your doorstep. Our extensive network of local restaurants and chefs ensures you get the best flavors in town.</p>
        <div>
            <a href="#services" class="cta-button-yzab567">Click Here to Continue</a>
            <a href="#specialties" class="cta-button-yzab567">Explore Menu</a>
        </div>
    </section>

    <section id="services" class="content-section-cdef890">
        <div class="container-wrapper-ghij123">
            <h2 class="section-title-klmn456">Our Services</h2>
            <div class="features-grid-opqr789">
                <div class="feature-card-stuv012">
                    <div class="feature-icon-wxyz345">🚚</div>
                    <h3 class="feature-title-abcd678">Fast Delivery</h3>
                    <p class="feature-description-efgh901">Our dedicated delivery team ensures your food arrives hot and fresh within 30-45 minutes. We use advanced tracking systems to monitor every order from kitchen to your door.</p>
                </div>
                <div class="feature-card-stuv012">
                    <div class="feature-icon-wxyz345">🍽️</div>
                    <h3 class="feature-title-abcd678">Quality Meals</h3>
                    <p class="feature-description-efgh901">We partner with top-rated local restaurants and certified kitchens to bring you restaurant-quality meals. Every dish is prepared with fresh ingredients and attention to detail.</p>
                </div>
                <div class="feature-card-stuv012">
                    <div class="feature-icon-wxyz345">📱</div>
                    <h3 class="feature-title-abcd678">Easy Ordering</h3>
                    <p class="feature-description-efgh901">Our user-friendly platform makes ordering simple and convenient. Browse menus, customize your order, and track delivery progress all in one place.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="services-showcase-ijkl123">
        <div class="container-wrapper-ghij123">
            <div class="service-item-mnop456">
                <div class="service-image-qrst789">
                    <img src="https://images.pexels.com/photos/958545/pexels-photo-958545.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Fresh ingredients preparation">
                </div>
                <div class="service-content-uvwx012">
                    <h3 class="service-title-yzab345">Farm-to-Table Freshness</h3>
                    <p class="service-description-cdef678">We source our ingredients directly from local farms and trusted suppliers. This ensures maximum freshness and supports our community's agricultural ecosystem. Every meal reflects our commitment to quality and sustainability.</p>
                    <a href="#commitment" class="cta-button-yzab567">Learn More</a>
                </div>
            </div>
            
            <div class="service-item-mnop456">
                <div class="service-content-uvwx012">
                    <h3 class="service-title-yzab345">Diverse Culinary Options</h3>
                    <p class="service-description-cdef678">From traditional comfort food to international cuisine, our extensive network of partner restaurants offers something for every palate. Whether you're craving Italian pasta, Asian stir-fry, or classic American dishes, we've got you covered.</p>
                    <a href="#specialties" class="cta-button-yzab567">Click Here to Continue</a>
                </div>
                <div class="service-image-qrst789">
                    <img src="https://images.pexels.com/photos/1640772/pexels-photo-1640772.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Diverse food options">
                </div>
            </div>
        </div>
    </section>

    <section id="specialties" class="specialty-section-cdef567">
        <div class="container-wrapper-ghij123">
            <h2 class="section-title-klmn456">Our Specialties</h2>
            <div class="specialty-grid-ghij890">
                <div class="specialty-card-klmn123">
                    <h3>Comfort Classics</h3>
                    <p>Hearty soups, grilled sandwiches, and homestyle favorites that remind you of home cooking at its finest.</p>
                </div>
                <div class="specialty-card-klmn123">
                    <h3>International Fusion</h3>
                    <p>Explore flavors from around the world with our carefully curated selection of global cuisine options.</p>
                </div>
                <div class="specialty-card-klmn123">
                    <h3>Healthy Choices</h3>
                    <p>Nutritious salads, grain bowls, and balanced meals designed for health-conscious food lovers.</p>
                </div>
                <div class="specialty-card-klmn123">
                    <h3>Sweet Treats</h3>
                    <p>Indulgent desserts and baked goods from local bakeries to satisfy your sweet tooth cravings.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="process" class="process-section-opqr456">
        <div class="container-wrapper-ghij123">
            <h2 class="section-title-klmn456">How It Works</h2>
            <div class="process-steps-stuv789">
                <div class="process-step-wxyz012">
                    <div class="step-number-abcd345">1</div>
                    <h3>Browse & Select</h3>
                    <p>Explore our extensive menu of local restaurants and dishes. Filter by cuisine type, dietary preferences, or delivery time.</p>
                </div>
                <div class="process-step-wxyz012">
                    <div class="step-number-abcd345">2</div>
                    <h3>Customize Order</h3>
                    <p>Add your favorite items to cart, specify any special instructions, and choose your preferred delivery time.</p>
                </div>
                <div class="process-step-wxyz012">
                    <div class="step-number-abcd345">3</div>
                    <h3>Track Progress</h3>
                    <p>Monitor your order in real-time from preparation to delivery. Get updates every step of the way.</p>
                </div>
                <div class="process-step-wxyz012">
                    <div class="step-number-abcd345">4</div>
                    <h3>Enjoy Your Meal</h3>
                    <p>Receive your fresh, hot meal at your doorstep and enjoy restaurant-quality food in the comfort of your home.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="about-section-ijkl234">
        <div class="about-content-mnop567">
            <h2 class="section-title-klmn456">About HomeXHub</h2>
            <p class="about-text-qrst890">HomeXHub revolutionizes the way people experience food delivery. We believe that great food should be accessible to everyone, regardless of location or time constraints. Our platform connects food lovers with the best local restaurants and chefs in their area.</p>
            <p class="about-text-qrst890">Founded on the principles of quality, convenience, and community support, we've built a network that benefits customers, restaurants, and delivery partners alike. Every order placed through HomeXHub contributes to strengthening local food ecosystems.</p>
            <div class="highlight-box-mnop234">
                <h3>Why Choose HomeXHub?</h3>
                <p>We're not just another delivery service. We're your neighbors, committed to bringing the best local flavors directly to your table while supporting the restaurants and chefs who make our communities special.</p>
                <a href="#reviews" class="cta-button-yzab567">Click Here to Continue</a>
            </div>
        </div>
    </section>

    <section id="history" class="history-timeline-uvwx123">
        <div class="container-wrapper-ghij123">
            <h2 class="section-title-klmn456">Our Story</h2>
            <div class="timeline-item-yzab456">
                <div class="timeline-year-cdef789">2019</div>
                <div class="timeline-content-ghij012">
                    <h3>The Beginning</h3>
                    <p>HomeXHub started as a small local initiative to connect neighborhood restaurants with busy families. Our founders, Sarah Martinez and David Chen, recognized the need for reliable food delivery in underserved areas.</p>
                </div>
            </div>
            <div class="timeline-item-yzab456">
                <div class="timeline-year-cdef789">2020</div>
                <div class="timeline-content-ghij012">
                    <h3>Rapid Growth</h3>
                    <p>During challenging times, we expanded our services to support local restaurants struggling with reduced foot traffic. We developed contactless delivery options and enhanced our safety protocols.</p>
                </div>
            </div>
            <div class="timeline-item-yzab456">
                <div class="timeline-year-cdef789">2021</div>
                <div class="timeline-content-ghij012">
                    <h3>Technology Innovation</h3>
                    <p>We launched our advanced tracking system and mobile app, making it easier than ever for customers to order and track their meals. Our platform became more user-friendly and efficient.</p>
                </div>
            </div>
            <div class="timeline-item-yzab456">
                <div class="timeline-year-cdef789">2022</div>
                <div class="timeline-content-ghij012">
                    <h3>Community Focus</h3>
                    <p>We introduced our local sourcing program, partnering directly with farms and suppliers to ensure the freshest ingredients reach our partner restaurants and ultimately, your table.</p>
                </div>
            </div>
            <div class="timeline-item-yzab456">
                <div class="timeline-year-cdef789">2023</div>
                <div class="timeline-content-ghij012">
                    <h3>Sustainable Future</h3>
                    <p>We implemented eco-friendly packaging solutions and carbon-neutral delivery options, demonstrating our commitment to environmental responsibility while maintaining service excellence.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="commitment" class="commitment-section-efgh678">
        <div class="commitment-content-ijkl901">
            <h2 class="section-title-klmn456">Our Commitment</h2>
            <p class="about-text-qrst890">At HomeXHub, we're dedicated to more than just delivering food. We're committed to building stronger communities, supporting local businesses, and providing exceptional service that exceeds expectations.</p>
            
            <div class="features-grid-opqr789">
                <div class="feature-card-stuv012">
                    <div class="feature-icon-wxyz345">🌱</div>
                    <h3 class="feature-title-abcd678">Sustainability</h3>
                    <p class="feature-description-efgh901">We use eco-friendly packaging and optimize delivery routes to reduce our environmental impact. Our green initiatives help protect the planet for future generations.</p>
                </div>
                <div class="feature-card-stuv012">
                    <div class="feature-icon-wxyz345">🤝</div>
                    <h3 class="feature-title-abcd678">Community Support</h3>
                    <p class="feature-description-efgh901">Every order supports local restaurants and creates jobs in your community. We believe in the power of local commerce to strengthen neighborhoods.</p>
                </div>
                <div class="feature-card-stuv012">
                    <div class="feature-icon-wxyz345">⭐</div>
                    <h3 class="feature-title-abcd678">Quality Assurance</h3>
                    <p class="feature-description-efgh901">Our rigorous quality standards ensure every meal meets our high expectations. We regularly audit our partner restaurants and maintain strict food safety protocols.</p>
                </div>
            </div>
            
            <div class="highlight-box-mnop234">
                <h3>Join Our Mission</h3>
                <p>When you choose HomeXHub, you're not just ordering a meal – you're supporting a vision of connected communities, sustainable practices, and exceptional food experiences.</p>
            </div>
        </div>
    </section>

    <section id="reviews" class="reviews-section-klmn345">
        <div class="container-wrapper-ghij123">
            <h2 class="section-title-klmn456">What Our Customers Say</h2>
            <div class="reviews-grid-opqr678">
                <div class="review-card-stuv901">
                    <div class="review-stars-wxyz234">★★★★★</div>
                    <p class="review-text-abcd567">"HomeXHub has completely changed how I think about food delivery. The quality is consistently excellent, and the delivery times are incredibly reliable. I especially love their selection of local restaurants I never knew existed!"</p>
                    <p class="reviewer-name-efgh890">- Jennifer Thompson</p>
                </div>
                <div class="review-card-stuv901">
                    <div class="review-stars-wxyz234">★★★★★</div>
                    <p class="review-text-abcd567">"As a busy parent, HomeXHub is a lifesaver. The app is so easy to use, and my kids love the variety of options available. The customer service team is also incredibly helpful and responsive."</p>
                    <p class="reviewer-name-efgh890">- Michael Rodriguez</p>
                </div>
                <div class="review-card-stuv901">
                    <div class="review-stars-wxyz234">★★★★★</div>
                    <p class="review-text-abcd567">"I've been using HomeXHub for over a year now, and they never disappoint. The food always arrives hot and fresh, and I appreciate their commitment to supporting local businesses in our community."</p>
                    <p class="reviewer-name-efgh890">- Amanda Foster</p>
                </div>
                <div class="review-card-stuv901">
                    <div class="review-stars-wxyz234">★★★★★</div>
                    <p class="review-text-abcd567">"The tracking feature is amazing! I can see exactly when my order is being prepared and when it's on the way. The delivery drivers are always professional and courteous."</p>
                    <p class="reviewer-name-efgh890">- Robert Kim</p>
                </div>
                <div class="review-card-stuv901">
                    <div class="review-stars-wxyz234">★★★★★</div>
                    <p class="review-text-abcd567">"HomeXHub introduced me to so many great local restaurants. Their platform makes it easy to discover new cuisines and support small businesses. Highly recommended!"</p>
                    <p class="reviewer-name-efgh890">- Lisa Chen</p>
                </div>
                <div class="review-card-stuv901">
                    <div class="review-stars-wxyz234">★★★★★</div>
                    <p class="review-text-abcd567">"Excellent service from start to finish. The food quality is restaurant-level, and the convenience factor is unmatched. HomeXHub has become an essential part of our weekly routine."</p>
                    <p class="reviewer-name-efgh890">- Daniel Martinez</p>
                </div>
            </div>
        </div>
    </section>

    <footer id="contact" class="footer-section-ghij901">
        <div class="footer-content-klmn234">
            <div class="footer-column-opqr567">
                <h3 class="footer-title-stuv890">Contact Information</h3>
                <p>📍 2847 Riverside Avenue, Suite 302<br>Springfield, IL 62704</p>
                <p>📧 hello@homexhub.com</p>
                <p>📞 <a href="tel:+15559847362" class="phone-link-abcd456">(555) 984-7362</a></p>
                <p>🕒 Daily: 6:00 AM - 11:00 PM</p>
            </div>
            <div class="footer-column-opqr567">
                <h3 class="footer-title-stuv890">Quick Links</h3>
                <a href="#services" class="footer-link-wxyz123">Our Services</a>
                <a href="#specialties" class="footer-link-wxyz123">Menu Categories</a>
                <a href="#process" class="footer-link-wxyz123">How It Works</a>
                <a href="#history" class="footer-link-wxyz123">Our Story</a>
                <a href="#reviews" class="footer-link-wxyz123">Customer Reviews</a>
            </div>
            <div class="footer-column-opqr567">
                <h3 class="footer-title-stuv890">Support</h3>
                <a href="#" class="footer-link-wxyz123" onclick="showModal('faq')">FAQ</a>
                <a href="#" class="footer-link-wxyz123" onclick="showModal('support')">Customer Support</a>
                <a href="#" class="footer-link-wxyz123" onclick="showModal('delivery')">Delivery Information</a>
                <a href="#" class="footer-link-wxyz123" onclick="showModal('partners')">Restaurant Partners</a>
            </div>
            <div class="footer-column-opqr567">
                <h3 class="footer-title-stuv890">Legal</h3>
                <a href="#" class="footer-link-wxyz123" onclick="showModal('privacy')">Privacy Policy</a>
                <a href="#" class="footer-link-wxyz123" onclick="showModal('terms')">Terms of Service</a>
                <a href="#" class="footer-link-wxyz123" onclick="showModal('cookies')">Cookie Policy</a>
                <div style="margin-top: 1rem;">
                    <a href="#commitment" class="cta-button-yzab567">Click Here to Continue</a>
                </div>
            </div>
        </div>
        <div class="copyright-bar-efgh789">
            <p>&copy; 2024 HomeXHub Food Delivery Services. All rights reserved. Serving fresh meals with community pride.</p>
        </div>
    </footer>

    <!-- Modal Windows -->
    <div id="modal-privacy" class="modal-overlay-ijkl012">
        <div class="modal-content-mnop345">
            <button class="modal-close-qrst678" onclick="closeModal('privacy')">&times;</button>
            <h2 class="modal-title-uvwx901">Privacy Policy</h2>
            <div class="modal-text-yzab234">
                <p><strong>Last Updated:</strong> January 15, 2024</p>
                <h3>Information We Collect</h3>
                <p>HomeXHub collects information you provide directly to us, such as when you create an account, place an order, or contact customer service. This includes your name, email address, phone number, delivery address, and payment information.</p>
                
                <h3>How We Use Your Information</h3>
                <p>We use the information we collect to provide, maintain, and improve our services, process transactions, send you technical notices and support messages, and communicate with you about products, services, and promotional offers.</p>
                
                <h3>Information Sharing</h3>
                <p>We do not sell, trade, or otherwise transfer your personal information to third parties without your consent, except as described in this policy. We may share your information with trusted partners who assist us in operating our platform and serving our customers.</p>
                
                <h3>Data Security</h3>
                <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the internet is 100% secure.</p>
                
                <h3>Your Rights</h3>
                <p>You have the right to access, update, or delete your personal information. You may also opt out of certain communications from us. Contact us at privacy@homexhub.com for any privacy-related requests.</p>
                
                <h3>Contact Information</h3>
                <p>If you have questions about this Privacy Policy, please contact us at privacy@homexhub.com or (555) 984-7362.</p>
            </div>
        </div>
    </div>

    <div id="modal-terms" class="modal-overlay-ijkl012">
        <div class="modal-content-mnop345">
            <button class="modal-close-qrst678" onclick="closeModal('terms')">&times;</button>
            <h2 class="modal-title-uvwx901">Terms of Service</h2>
            <div class="modal-text-yzab234">
                <p><strong>Last Updated:</strong> January 15, 2024</p>
                <h3>Acceptance of Terms</h3>
                <p>By accessing and using HomeXHub's services, you accept and agree to be bound by the terms and provision of this agreement. These terms apply to all users of the service, including browsers, customers, and delivery partners.</p>
                
                <h3>Service Description</h3>
                <p>HomeXHub provides an online platform that connects customers with local restaurants and food providers. We facilitate the ordering and delivery process but do not prepare the food ourselves.</p>
                
                <h3>User Accounts</h3>
                <p>To use certain features of our service, you must create an account. You are responsible for maintaining the confidentiality of your account information and for all activities that occur under your account.</p>
                
                <h3>Orders and Payment</h3>
                <p>All orders are subject to acceptance by the restaurant. Payment is due at the time of order placement. We accept major credit cards and other payment methods as indicated on our platform.</p>
                
                <h3>Delivery</h3>
                <p>Delivery times are estimates and may vary based on weather, traffic, and other factors beyond our control. We strive to deliver all orders within the estimated timeframe.</p>
                
                <h3>Cancellations and Refunds</h3>
                <p>Orders may be cancelled within a limited time after placement. Refund policies vary by restaurant and circumstances. Contact customer service for assistance with cancellations or refunds.</p>
                
                <h3>Limitation of Liability</h3>
                <p>HomeXHub's liability is limited to the amount paid for the specific order in question. We are not liable for indirect, incidental, or consequential damages.</p>
                
                <h3>Contact Information</h3>
                <p>For questions about these Terms of Service, contact us at legal@homexhub.com or (555) 984-7362.</p>
            </div>
        </div>
    </div>

    <div id="modal-faq" class="modal-overlay-ijkl012">
        <div class="modal-content-mnop345">
            <button class="modal-close-qrst678" onclick="closeModal('faq')">&times;</button>
            <h2 class="modal-title-uvwx901">Frequently Asked Questions</h2>
            <div class="modal-text-yzab234">
                <h3>How long does delivery take?</h3>
                <p>Most orders are delivered within 30-45 minutes. Delivery times may vary based on restaurant preparation time, distance, and current demand.</p>
                
                <h3>What areas do you serve?</h3>
                <p>We currently serve the greater Springfield metropolitan area and surrounding suburbs. Check our app or website to see if we deliver to your location.</p>
                
                <h3>Is there a delivery fee?</h3>
                <p>Delivery fees vary by distance and restaurant. The exact fee will be displayed before you complete your order.</p>
                
                <h3>Can I track my order?</h3>
                <p>Yes! Our real-time tracking system lets you monitor your order from preparation to delivery.</p>
                
                <h3>What if my order is incorrect?</h3>
                <p>Contact our customer service team immediately at (555) 984-7362. We'll work with the restaurant to resolve the issue quickly.</p>
                
                <h3>Do you offer group ordering?</h3>
                <p>Yes, we support large orders for offices, events, and gatherings. Contact us for special arrangements and potential discounts.</p>
            </div>
        </div>
    </div>

    <div id="modal-support" class="modal-overlay-ijkl012">
        <div class="modal-content-mnop345">
            <button class="modal-close-qrst678" onclick="closeModal('support')">&times;</button>
            <h2 class="modal-title-uvwx901">Customer Support</h2>
            <div class="modal-text-yzab234">
                <h3>Contact Methods</h3>
                <p><strong>Phone:</strong> <a href="tel:+15559847362" class="phone-link-abcd456">(555) 984-7362</a><br>
                <strong>Email:</strong> support@homexhub.com<br>
                <strong>Hours:</strong> Daily 6:00 AM - 11:00 PM</p>
                
                <h3>Common Issues</h3>
                <p>Our support team can help with order issues, account problems, payment questions, delivery concerns, and restaurant recommendations.</p>
                
                <h3>Response Times</h3>
                <p>Phone support: Immediate during business hours<br>
                Email support: Within 2-4 hours during business hours</p>
                
                <h3>Emergency Support</h3>
                <p>For urgent delivery issues or food safety concerns, call our 24/7 emergency line at (555) 984-7362.</p>
            </div>
        </div>
    </div>

    <div id="modal-delivery" class="modal-overlay-ijkl012">
        <div class="modal-content-mnop345">
            <button class="modal-close-qrst678" onclick="closeModal('delivery')">&times;</button>
            <h2 class="modal-title-uvwx901">Delivery Information</h2>
            <div class="modal-text-yzab234">
                <h3>Delivery Areas</h3>
                <p>We deliver throughout Springfield and surrounding areas including Chatham, Sherman, Rochester, and Riverton. Delivery radius extends up to 15 miles from participating restaurants.</p>
                
                <h3>Delivery Times</h3>
                <p>Standard delivery: 30-45 minutes<br>
                Express delivery: 20-30 minutes (additional fee)<br>
                Scheduled delivery: Available up to 24 hours in advance</p>
                
                <h3>Delivery Instructions</h3>
                <p>Please provide clear delivery instructions including apartment numbers, gate codes, and any special access requirements. Our drivers will follow contactless delivery protocols when requested.</p>
                
                <h3>Weather Policy</h3>
                <p>We deliver in most weather conditions but may suspend service during severe weather for safety reasons. Customers will be notified of any service interruptions.</p>
            </div>
        </div>
    </div>

    <div id="modal-partners" class="modal-overlay-ijkl012">
        <div class="modal-content-mnop345">
            <button class="modal-close-qrst678" onclick="closeModal('partners')">&times;</button>
            <h2 class="modal-title-uvwx901">Restaurant Partners</h2>
            <div class="modal-text-yzab234">
                <h3>Join Our Network</h3>
                <p>Are you a restaurant owner interested in partnering with HomeXHub? We're always looking for quality establishments to join our delivery network.</p>
                
                <h3>Partnership Benefits</h3>
                <p>• Expanded customer reach<br>
                • Professional delivery service<br>
                • Marketing support<br>
                • Real-time order management<br>
                • Detailed sales analytics</p>
                
                <h3>Requirements</h3>
                <p>• Valid business license and permits<br>
                • Food safety certifications<br>
                • Consistent quality standards<br>
                • Reliable order fulfillment</p>
                
                <h3>Get Started</h3>
                <p>Contact our partnership team at partners@homexhub.com or call (555) 984-7362 to learn more about joining the HomeXHub family.</p>
            </div>
        </div>
    </div>

    <div id="modal-cookies" class="modal-overlay-ijkl012">
        <div class="modal-content-mnop345">
            <button class="modal-close-qrst678" onclick="closeModal('cookies')">&times;</button>
            <h2 class="modal-title-uvwx901">Cookie Policy</h2>
            <div class="modal-text-yzab234">
                <h3>What Are Cookies</h3>
                <p>Cookies are small text files stored on your device when you visit our website. They help us provide you with a better experience by remembering your preferences and improving site functionality.</p>
                
                <h3>Types of Cookies We Use</h3>
                <p><strong>Essential Cookies:</strong> Required for basic site functionality<br>
                <strong>Performance Cookies:</strong> Help us understand how visitors use our site<br>
                <strong>Functional Cookies:</strong> Remember your preferences and settings<br>
                <strong>Marketing Cookies:</strong> Used to deliver relevant advertisements</p>
                
                <h3>Managing Cookies</h3>
                <p>You can control cookies through your browser settings. However, disabling certain cookies may affect site functionality and your user experience.</p>
                
                <h3>Third-Party Cookies</h3>
                <p>We may use third-party services that set their own cookies. These are governed by the respective third parties' privacy policies.</p>
            </div>
        </div>
    </div>

    <script>
        function showModal(modalId) {
            document.getElementById('modal-' + modalId).style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        function closeModal(modalId) {
            document.getElementById('modal-' + modalId).style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            if (event.target.classList.contains('modal-overlay-ijkl012')) {
                event.target.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        }

        // Smooth scrolling for navigation links
        document.querySelectorAll('.nav-link-mno345').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if (targetId.startsWith('#')) {
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        targetElement.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                }
            });
        });

        // Smooth scrolling for CTA buttons
        document.querySelectorAll('.cta-button-yzab567').forEach(button => {
            button.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href && href.startsWith('#')) {
                    e.preventDefault();
                    const targetElement = document.querySelector(href);
                    if (targetElement) {
                        targetElement.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                }
            });
        });

        // Add scroll effect to header
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.header-section-abc123');
            if (window.scrollY > 100) {
                header.style.background = 'rgba(255, 255, 255, 0.98)';
                header.style.backdropFilter = 'blur(10px)';
            } else {
                header.style.background = 'rgba(255, 255, 255, 0.95)';
                header.style.backdropFilter = 'none';
            }
        });

        // Add animation to feature cards on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe feature cards
        document.querySelectorAll('.feature-card-stuv012, .review-card-stuv901, .specialty-card-klmn123').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(card);
        });
    </script>

<a href="/" alt="stats counter free" target="_blank" >
<img  src="https://sstatic1.histats.com/0.gif?4977134&101" alt="stats counter free" border="0">
    
</body>
</html>





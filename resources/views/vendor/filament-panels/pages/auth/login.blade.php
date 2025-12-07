<div>
    <style>
        body {
            margin: 0;
            padding: 0;
<<<<<<< HEAD
            background: #1a1a1a;
=======
            background: #619ed1;
>>>>>>> a68c95a2ee154f4772bba76afbb7436ec1dbb284
            font-family: 'Orbitron', sans-serif;
            overflow: hidden;
        }

        .cyber-bg {
            width: 100%;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
<<<<<<< HEAD

            background-image: url("{{ asset('21.jpg') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

        }

        @keyframes snowfall {
            0% { background-position: center 0; }
            100% { background-position: center 1000px; }
        }


=======
            background: radial-gradient(circle at center, #02d6af 0%, #00e7f7 90%);
        }

>>>>>>> a68c95a2ee154f4772bba76afbb7436ec1dbb284
        .scanlines {
            pointer-events: none;
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: 100vw;
            background-image: repeating-linear-gradient(
                to bottom,
<<<<<<< HEAD
                rgba(255, 255, 255, 0.02) 0px,
                rgba(255, 255, 255, 0.02) 1px,
=======
                rgba(47, 255, 141, 0.02) 0px,
                rgba(1, 222, 251, 0.02) 1px,
>>>>>>> a68c95a2ee154f4772bba76afbb7436ec1dbb284
                transparent 2px,
                transparent 3px
            );
            z-index: 10;
        }

<<<<<<< HEAD
        /* ---------------------------
           CARD CHRISTMAS AESTHETIC
        ----------------------------*/
        .cyber-card {
            background: rgba(0, 0, 0, 0.6);
            border: 2px solid #ff9a16df; /* red */
            box-shadow:
                0 0 20px #ff9a16df,
                0 0 40px #ff7ae0 inset; /* green glow */
            backdrop-filter: blur(14px);
            border-radius: 18px;
            padding: 40px;
            width: 400px;
            z-index: 20;
            animation: christmasGlow 3s infinite alternate;
        }

        @keyframes christmasGlow {
            0% {
                box-shadow: 0 0 15px #ff9a16df,
                            0 0 30px #ff7ae0 inset;
            }
            100% {
                box-shadow: 0 0 30px #ff9a16df,
                            0 0 60px #ff7ae0 inset;
            }
        }

        /* ---------------------------
           TITLE
        ----------------------------*/
        .cyber-title {
            font-size: 28px;
            font-weight: bold;
            color: #ffebd6;
            text-shadow: 0 0 12px #ff9a16df, 0 0 25px #ff7ae0;
=======
        .cyber-card {
            background: rgba(15, 0, 25, 0.8);
            border: 2px solid #31e0ec;
            box-shadow: 0 0 20px #0099ff, 0 0 50px #00eaff inset;
            backdrop-filter: blur(12px);
            border-radius: 14px;
            padding: 40px;
            width: 400px;
            z-index: 20;
            animation: glowPulse 3s infinite alternate;
        }

        @keyframes glowPulse {
            0% { box-shadow: 0 0 15px #05c5ff, 0 0 20px #00eaff inset; }
            100% { box-shadow: 0 0 35px #0af7d7, 0 0 70px #00eaff inset; }
        }

        .cyber-title {
            font-size: 28px;
            font-weight: bold;
            color: #00eaff;
            text-shadow: 0 0 10px #00eaff;
>>>>>>> a68c95a2ee154f4772bba76afbb7436ec1dbb284
            text-align: center;
            margin-bottom: 25px;
        }

<<<<<<< HEAD
        /* ---------------------------
           INPUT CHRISTMAS STYLE
        ----------------------------*/
        .fi-input, input {
            background: rgba(255, 255, 255, 0.12) !important;
            color: #ffffff !important;
            border: 1px solid #ff8585 !important;
            box-shadow: 0 0 10px #ff9a16df !important;
        }

        .fi-input:focus {
            border-color: #ff7ae0 !important;
            box-shadow: 0 0 18px #ff7ae0 !important;
        }

        /* ---------------------------
           BUTTON CHRISTMAS
        ----------------------------*/
        .cyber-btn {
            width: 100%;
            background: linear-gradient(90deg, #ff7ae0, #ff9a16df);
            color: #000;
            padding: 10px;
            font-weight: bold;
            border-radius: 10px;
            cursor: pointer;
            text-shadow: 0 0 5px #fff;
            box-shadow: 0 0 20px #ff7ae0;
=======
        .fi-input, input {
            background: rgba(255, 255, 255, 0.1) !important;
            color: #ffffff !important;
            border: 1px solid #8de0ee !important;
            box-shadow: 0 0 10px #14fcdd !important;
        }

        .fi-input:focus {
            border-color: #00eaff !important;
            box-shadow: 0 0 15px #00eaff !important;
        }

        .cyber-btn {
            width: 100%;
            background: linear-gradient(90deg, #00fff2, #00eaff);
            color: #000;
            padding: 10px;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
            text-shadow: 0 0 5px #fff;
            box-shadow: 0 0 15px #14ffeb;
>>>>>>> a68c95a2ee154f4772bba76afbb7436ec1dbb284
            transition: 0.2s;
        }

        .cyber-btn:hover {
<<<<<<< HEAD
            box-shadow: 0 0 35px #ff9a16df;
            transform: scale(1.05);
        }
    </style>

=======
            box-shadow: 0 0 25px #00eaff;
            transform: scale(1.05);
        }
    </style>
>>>>>>> a68c95a2ee154f4772bba76afbb7436ec1dbb284
    <div class="cyber-bg"></div>
    <div class="scanlines"></div>

    <div class="min-h-screen flex items-center justify-center">
<<<<<<< HEAD
=======

>>>>>>> a68c95a2ee154f4772bba76afbb7436ec1dbb284
        <div class="cyber-card">
            <div class="cyber-title">LOGIN SAYANG</div>

            {{-- LIVEWIRE FORM --}}
            <form wire:submit="authenticate" class="space-y-4">
                {{ $this->form }}

                <button type="submit" class="cyber-btn">
                    LOGIN
                </button>
            </form>
        </div>
<<<<<<< HEAD
=======

>>>>>>> a68c95a2ee154f4772bba76afbb7436ec1dbb284
    </div>
</div>

<div>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: #1a1a1a;
            font-family: 'Orbitron', sans-serif;
            overflow: hidden;
        }

        .cyber-bg {
            width: 100%;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;

            background-image: url("{{ asset('21.jpg') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

        }

        @keyframes snowfall {
            0% { background-position: center 0; }
            100% { background-position: center 1000px; }
        }


        .scanlines {
            pointer-events: none;
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: 100vw;
            background-image: repeating-linear-gradient(
                to bottom,
                rgba(255, 255, 255, 0.02) 0px,
                rgba(255, 255, 255, 0.02) 1px,
                transparent 2px,
                transparent 3px
            );
            z-index: 10;
        }

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
            text-align: center;
            margin-bottom: 25px;
        }

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
            transition: 0.2s;
        }

        .cyber-btn:hover {
            box-shadow: 0 0 35px #ff9a16df;
            transform: scale(1.05);
        }
    </style>

    <div class="cyber-bg"></div>
    <div class="scanlines"></div>

    <div class="min-h-screen flex items-center justify-center">
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
    </div>
</div>

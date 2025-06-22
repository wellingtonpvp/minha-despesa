    <style>
        h1 {
            text-align: center;
            color: #333;
        }

        .carteira {
            background-color: #fff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        h2 {
            color: #444;
            border-bottom: 2px solid #eee;
            padding-bottom: 5px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            background-color: #e6f0ff;
            margin: 8px 0;
            padding: 10px 15px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        input[type="checkbox"] {
            transform: scale(1.2);
        }

        label {
            flex: 1;
            margin-left: 10px;
        }
    </style>

    <main id="carteiras">

        <h1 class="my-4">💼 Minhas Carteiras</h1>

        <form method="post">
            <div class="carteira">
                <h2>💵 Carteira Física</h2>

                <div class="input-group">
                    <span class="input-group-text">R$</span>
                    <input class="form-control" type="text" name="carteiraFisico" value="<?= $dinheiro_fisico->valor ?>">
                </div>

            </div>

            <div class="carteira">
                <h2>💳 Carteira Digital</h2>
                <div class="input-group">
                    <span class="input-group-text">R$</span>
                    <input class="form-control" type="text" name="carteiraDigital" value="<?= $dinheiro_digital->valor ?>">

                </div>
            </div>

            <div class="text-center">
                <button class="btn btn-danger col-md-6">Editar</button>
            </div>
        </form>
    </main>







    <!-- <section>
    <h2 class="rounded display-5 text-center my-3">
        Carteiras
    </h2>

    <div class="carteiras d-flex flex-column">
        <div class="col-md-6 border border-secondary rounded my-2">
            carteira digital
        </div>

        <div class="col-md-6 border border-secondary rounded my-2">
            carteira fisica
        </div>

</section> -->
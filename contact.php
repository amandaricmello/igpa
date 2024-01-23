<?php
include_once("partials/header.php");
?>

<section id="form" class="container py-5">
    <div class="row">
        <div class="col-md-5 mb-5">
            <h1 class="mb-4">Fale Conosco</h1>
            <p>
                O Instituto GPA mantém diversos canais de comunicação para estreitar os laços com parceiros, organizações da sociedade civil e sociedade em geral. Por meio de nosso site e redes sociais, você acompanha projetos e iniciativas promovidos e apoiados pelo Instituto. Para dúvidas e sugestões, entre em contato por meio dos nossos canais!
            </p>
        </div>

        <div class="col-12 mt-md-5">
            <h2>Formulário</h2>
            <form class="row g-3 align-items-center justify-content-md-between mt-5">
                <div class="col-md-6">
                    <input type="text" class="form-control" name="name" placeholder="Nome (obrigatório)">
                </div>
                <div class="col-md-6">
                    <input type="email" class="form-control" name="email" placeholder="E-mail (obrigatório)">
                </div>

                <div class="col-md-4">
                    <input type="tel" class="form-control" name="phone" placeholder="Telefone (DDD + número / obrigatório)">
                </div>

                <div class="col-md-8">
                    <input type="text" class="form-control" name="subject" placeholder="Assunto (obrigatório)">
                </div>

                <div class="col-12">
                    <textarea class="form-control" name="mensagem" placeholder="Mensagem (obrigatório)" cols="30" rows="10"></textarea>
                </div>

                <div class="col-md-5">
                    <p class="text-light">
                        Todos os contatos realizados nesse cadastro serão direcionados
                        para o e-mail: institutogpa@institutogpa.org.br
                    </p>
                </div>

                <div class="col-md-6">
                    <button type="submit" class="btn btn-secondary w-100">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</section>

<section id="faq" class="d-block bg-light py-5">
    <div class="container py-3">
        <div class="row justify-content-center">
            <div class="col-md-9 mb-5">
                <h1>Perguntas frequentes</h1>
            </div>

            <div class="col-md-9">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item mb-2">
                        <div class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <h5 class="pe-3">
                                    Como faço para cadastrar a minha organização como parceira do Instituto GPA?
                                </h5>
                            </button>
                        </div>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne">
                            <div class="accordion-body">
                                Para que uma organização possa ser parceria do Instituto GPA é necessário que possua os documentos: CNPJ, Ata de Posse e Estatuto Social. Para saber mais informações, entre em contato pelo formulário.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-2">
                        <div class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <h5 class="pe-3">
                                    Vocês apoiam projeto oriundos de incentivos fiscais? Como apresentar meu projeto para apoio por meio das leis de incentivo fiscal?
                                </h5>
                            </button>
                        </div>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
                            <div class="accordion-body">
                                O Instituto GPA apoia na avaliação e seleção de projetos incentivados, principalmente no âmbito federal. Para apresentar seu projeto, encaminhe-o para institutogpa@institutogpa.org.br e a equipe responsável entrará em contato caso haja oportunidades de apoio.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-2">
                        <div class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <h5 class="pe-3">
                                    Como solicitar doações de alimentos ao GPA?
                                </h5>
                            </button>
                        </div>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree">
                            <div class="accordion-body">
                                As doações são realizadas a partir de um cadastro e conforme disponibilidade das unidades do GPA. Caso sua organização esteja localizada na região de alguma loja do GPA, entre em contato através do e-mail: doacoes@institutogpa.org.br e sua solicitação será analisada e respondida caso haja possibilidade de doação.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-2">
                        <div class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                <h5 class="pe-3">
                                    Como posso trabalhar no Instituto GPA?
                                </h5>
                            </button>
                        </div>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour">
                            <div class="accordion-body">
                                Agradecemos o seu interesse em atuar na equipe do Instituto GPA! Para compartilhar o seu CV, escreva para institutogpa@institutogpa.org.br
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include_once("partials/footer.php");
?>
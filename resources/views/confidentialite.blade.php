@extends('base')

@section('contenu')

    <div class="grid grid-cols-1 gap-4 mx-6">
        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none">
            <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">
                Charte de confidentialité
            </h1>

            <div class="mt-6 space-y-6 text-gray-600 dark:text-gray-300 leading-relaxed">
                <p>
                    Cette charte explique comment les données personnelles sont collectées et utilisées sur le site ADDA.
                    Elle s’applique aux visiteurs du site ainsi qu’aux personnes qui créent un compte.
                </p>

                <p class="text-sm text-gray-500 dark:text-gray-400">
                    Dernière mise à jour : 17 septembre 2026
                </p>

                <section>
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-white">1. Responsable du traitement</h2>
                    <p class="mt-2">
                        Le responsable du traitement est <strong>ADDA (AujourD’hui restaurons DemAin)</strong>,
                        dont le siège est situé <strong>[adresse complète]</strong>.
                        Pour toute question relative à vos données, vous pouvez écrire à
                        <strong>contact@ADDA.com</strong>.
                    </p>
                </section>

                <section>
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-white">2. Données collectées</h2>
                    <p class="mt-2">Selon votre utilisation du site, nous pouvons traiter :</p>
                    <ul class="mt-2 list-disc space-y-1 pl-6">
                        <li>vos nom et adresse e-mail lors de la création ou de la gestion de votre compte ;</li>
                        <li>les informations nécessaires à la sécurité du compte, comme le mot de passe chiffré et la date de vérification de l’adresse e-mail ;</li>
                        <li>les éléments ajoutés à votre panier et les informations de session nécessaires au fonctionnement du site ;</li>
                        <li>des données techniques limitées, telles que l’adresse IP, le navigateur et les journaux nécessaires à la sécurité et au diagnostic.</li>
                    </ul>
                    <p class="mt-2">
                        Nous ne vous demandons pas de transmettre de données sensibles. Merci de ne pas en saisir dans les champs du site.
                    </p>
                </section>

                <section>
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-white">3. Finalités et bases légales</h2>
                    <p class="mt-2">Vos données sont utilisées pour :</p>
                    <ul class="mt-2 list-disc space-y-1 pl-6">
                        <li>créer et administrer votre compte, sur la base de l’exécution du service demandé ;</li>
                        <li>vous permettre de consulter les ateliers et de gérer votre panier, sur la base de l’exécution du service ;</li>
                        <li>sécuriser le site, prévenir les abus et assurer son bon fonctionnement, sur la base de notre intérêt légitime ;</li>
                        <li>respecter nos obligations légales, lorsque la loi l’exige.</li>
                    </ul>
                    <p class="mt-2">
                        Aucun traitement à des fins de prospection commerciale n’est réalisé sans votre consentement lorsque celui-ci est requis.
                    </p>
                </section>

                <section>
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-white">4. Conservation des données</h2>
                    <p class="mt-2">
                        Les données de votre compte sont conservées pendant la durée de son existence, puis supprimées ou archivées
                        conformément aux obligations légales applicables. Les données de session et les journaux techniques sont conservés
                        pendant la durée nécessaire au fonctionnement et à la sécurité du site, puis automatiquement supprimés selon la configuration du serveur.
                    </p>
                </section>

                <section>
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-white">5. Destinataires et transferts</h2>
                    <p class="mt-2">
                        Les données sont accessibles uniquement aux personnes habilitées à administrer le site et à nos prestataires techniques
                        lorsqu’ils interviennent pour l’hébergement, la maintenance ou la sécurité. Elles ne sont ni vendues ni louées.
                        Aucun transfert hors de l’Espace économique européen n’est organisé sans garanties conformes au RGPD.
                    </p>
                </section>

                <section>
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-white">6. Cookies</h2>
                    <p class="mt-2">
                        Le site utilise des cookies et mécanismes de session nécessaires à l’authentification, à la sécurité et au maintien de votre navigation.
                        Ces traceurs essentiels ne servent pas à vous profiler. Si des cookies de mesure d’audience ou de publicité sont ajoutés ultérieurement,
                        ils feront l’objet d’une information et d’un consentement lorsque la réglementation l’exige.
                    </p>
                </section>

                <section>
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-white">7. Vos droits</h2>
                    <p class="mt-2">
                        Vous pouvez demander l’accès à vos données, leur rectification, leur effacement, la limitation du traitement,
                        ainsi que la portabilité des données lorsque ce droit s’applique. Vous pouvez également vous opposer à un traitement
                        fondé sur l’intérêt légitime et retirer votre consentement à tout moment.
                    </p>
                    <p class="mt-2">
                        Pour exercer vos droits, contactez-nous à <strong>contact@ADDA.com</strong> en précisant votre demande
                        et l’adresse associée à votre compte. Vous pouvez aussi introduire une réclamation auprès de la CNIL
                        (<a href="https://www.cnil.fr" class="text-red-500 underline hover:text-red-700" rel="noopener noreferrer">www.cnil.fr</a>).
                    </p>
                </section>

                <section>
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-white">8. Sécurité et évolution de la charte</h2>
                    <p class="mt-2">
                        Nous mettons en œuvre des mesures techniques et organisationnelles adaptées pour protéger vos données contre la perte,
                        l’accès non autorisé et la divulgation. Cette charte peut être mise à jour pour refléter une évolution du site,
                        de ses traitements ou de la réglementation. La version publiée sur cette page est la version applicable.
                    </p>
                </section>
            </div>
        </div>

        <a href="{{route('index')}}" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
            <div class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="sm:fixed sm:left-0 self-center shrink-0 stroke-red-500 w-6 h-6 mx-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M 4.5 12 l 6.75 -6.75 M 4.5 12 h 15 M 4.5 12 l 6.75 6.75" />
                </svg>
                <div class="px-3 mx-2">Retour</div>
            </div>
        </a>
    </div>

@endsection
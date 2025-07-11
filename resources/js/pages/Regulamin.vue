<script setup>
// Regulamin pobytu page
import PageHeader from '../components/PageHeader.vue'
</script>

<template>
  <div class="min-h-screen bg-gray-50">
    <!-- Nagłówek -->
    <PageHeader
      title='Regulamin <span class="text-teal">Pobytu</span>'
      description="Zasady i warunki pobytu w D.W. Bakster"
    />

    <!-- Treść regulaminu -->
    <div class="max-w-4xl mx-auto px-4 py-8 sm:px-6 lg:px-8">
      <div class="bg-white shadow rounded-lg p-8">

        <!-- § 1 Rezerwacja i pobytu -->
        <section class="mb-8">
          <h2 class="text-2xl font-semibold text-gray-900 mb-4">§ 1 Rezerwacja i pobytu</h2>
          <div class="prose prose-gray max-w-none">
            <ul class="list-disc pl-6 space-y-2 text-gray-700">
              <li>Rezerwacji można dokonać telefonicznie, e-mailowo, poprzez portale rezerwacyjne</li>
              <li>Dokonanie rezerwacji jest równoznaczne z przyjęciem ogólnych zasad rezerwacji i pobytu.</li>
              <li>Rezerwację uważa się za dokonaną po wpłynięciu zadatku na konto podane podczas rezerwacji e-mailowej</li>
              <li>W przypadku rezygnacji z usług wpłacony zadatek nie podlega zwrotowi.</li>
              <li>W przypadku rezerwacji pobytu poprzez portal booking.com zastosowanie mają zasady oznaczone w rezerwacji internetowej booking.com</li>
              <li>Pozostała suma wynikająca z zamówionej usługi powinna być uregulowana w dniu przyjazdu Gościa i nie podlega zwrotowi w przypadku skrócenia pobytu z przyczyn niezależnych od D.W. Bakster.</li>
              <li>Opłata miejscowa nie jest wliczana do ceny usługi i jest pobierana niezależnie od ceny pobytu. Wysokość opłaty klimatycznej ustalana jest przez radę Miejską Władysławowo (Uchwała Rady Miejskiej Władysławowa do wglądu w siedzibie D.W. Bakster)</li>
              <li>Wszystkie ceny zawierają podatek VAT od towarów i usług.</li>
            </ul>
          </div>
        </section>

        <!-- § 2 Prawa i obowiązki -->
        <section class="mb-8">
          <h2 class="text-2xl font-semibold text-gray-900 mb-4">§ 2 Prawa i obowiązki</h2>
          <div class="prose prose-gray max-w-none">
            <ul class="list-disc pl-6 space-y-2 text-gray-700">
              <li>Goście mają prawo do zgłaszania na recepcji wszelkich uwag i sugestii dotyczących ich pobytu.</li>
              <li>Goście są zobowiązani podczas pobytu w D.W. Bakster do przestrzegania zasad BHP, przepisów przeciwpożarowych oraz przepisów porządkowych.</li>
              <li>W przypadku naruszania przez Gościa w sposób rażący i natarczywy zasad lub porządku zagrażającego życiu i zdrowiu innych Gości i personelu, D.W. Bakster ma prawo rozwiązać umowę z tym Gościem w trybie natychmiastowym.</li>
              <li>Gość przebywający w D.W. Bakster jest odpowiedzialny za sprzęt i wyposażenie swego pokoju. W przypadku zniszczenia lub zgubienia sprzętu lub wyposażenia pokoju Gość ponosi odpowiedzialność finansową.</li>
              <li>Obowiązkiem Gościa jest zgłoszenie się do recepcji w dniu wymeldowania w celu dokonania odbioru pokoju, zgłoszenia uwag lub zgłoszenia uszkodzeń, zagubienia sprzętu lub wyposażenia.</li>
              <li>Gość jest zobowiązany do przestrzegania ciszy nocnej w godzinach od 22 do 7</li>
            </ul>
          </div>
        </section>

        <!-- § 3 Informacje ogólne -->
        <section class="mb-8">
          <h2 class="text-2xl font-semibold text-gray-900 mb-4">§ 3 Informacje ogólne</h2>
          <div class="prose prose-gray max-w-none">
            <ul class="list-disc pl-6 space-y-2 text-gray-700">
              <li>Doba hotelowa: przyjazd Gościa od godziny 16, wyjazd Gościa do godziny 11.</li>
              <li>Osoby niezameldowane mogą przebywać w pokoju w godzinach 7.00-22.00. Przebywanie osoby niezameldowanej w pokoju Gościa po godzinie 22.00 jest równoznaczne z wyrażeniem zgody przez Gościa na odpłatne dokwaterowanie osoby nie zameldowanej do Gościa w wysokości 150% cen obowiązujących w danym dniu.</li>
              <li>W pokojach D.W. Bakster obowiązuje całkowity zakaz używania wszelkich urządzeń i substancji mogących stanowić zagrożenie dla zdrowia i życia Gości.</li>
              <li>Na terenie D.W. Bakster obowiązuje zakaz palenia, poza miejscami wyznaczonymi na zewnątrz budynku.</li>
              <li>Na terenie parkingu obowiązują ogólne zasady ruchu drogowego i hotel nie odpowiada za straty wynikające z ich nieprzestrzegania.</li>
              <li>Podczas korzystania z bezprzewodowego internetu na terenie D.W. Bakster Gość zobowiązany jest do korzystania z niego w sposób zgodny z polskim prawem oraz nienaruszający interesów osób trzecich.</li>
            </ul>
          </div>
        </section>

        <!-- § 4 Odpowiedzialność -->
        <section class="mb-8">
          <h2 class="text-2xl font-semibold text-gray-900 mb-4">§ 4 Odpowiedzialność</h2>
          <div class="prose prose-gray max-w-none">
            <ul class="list-disc pl-6 space-y-2 text-gray-700">
              <li>D.W Bakster zastrzega sobie prawo do odwołania rezerwacji, w każdym okresie przed rozpoczęciem pobytu z powodu zdarzeń losowych niezależnych od D.W Bakster. Pensjonat zobowiązany jest do przedstawienia oferty alternatywnej lub zwrotu należności.</li>
              <li>Rzeczywisty wygląd pokoi może się różnić od widocznych na zdjęciach.</li>
              <li>D.W. Bakster ponosi odpowiedzialność wyłącznie za rzeczy wartościowe Gości złożone do depozytu i potwierdzone stosownym wpisem.</li>
              <li>Parking bezpłatny – niestrzeżony. Właściciel terenu nie ponosi odpowiedzialności za pozostawione pojazdy ani znajdujące się w nich mienie.</li>
            </ul>
          </div>
        </section>

        <!-- § 5 Reklamacje -->
        <section class="mb-8">
          <h2 class="text-2xl font-semibold text-gray-900 mb-4">§ 5 Reklamacje</h2>
          <div class="prose prose-gray max-w-none">
            <ul class="list-disc pl-6 space-y-2 text-gray-700">
              <li>Reklamacje związane z pobytem Gościa należy zgłaszać bezpośrednio do przedstawiciela D.W. Bakster po stwierdzeniu podstawy do ich zgłoszenia. Przedstawiciel Pensjonatu zbada zasadność zgłoszonej reklamacji.</li>
              <li>Każda reklamacja będzie rozpatrywana indywidualnie i o jej wyniku oraz propozycjach załatwienia sprawy Gość zostanie poinformowany przez przedstawiciela Pensjonatu</li>
            </ul>
          </div>
        </section>

        <!-- Kontakt -->
        <div class="mt-12 p-6 bg-gray-50 rounded-lg">
          <h3 class="text-lg font-semibold text-gray-900 mb-2">Masz pytania?</h3>
          <p class="text-gray-600">W przypadku pytań dotyczących regulaminu, prosimy o kontakt z recepcją.</p>
          <div class="mt-4">
            <p class="text-sm text-gray-500">
              <strong>Telefon:</strong> +48 123 456 789<br>
              <strong>Email:</strong> info@bakster.pl
            </p>
          </div>
        </div>

      </div>
    </div>
  </div>
</template>

<style scoped>
.hero-bg {
  background-image: url('https://picsum.photos/id/16/2500/1667');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}
</style>

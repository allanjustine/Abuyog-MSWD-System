<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // List of barangays with dummy latitude and longitude values
        $barangays = [
            ['name' => 'Alangilan', 'latitude' => 10.63966298802748, 'longitude' => 125.0262333631705],
            ['name' => 'Anibongan', 'latitude' => 10.604396259078639, 'longitude' => 125.05567123787205],
            ['name' => 'Bagacay', 'latitude' => 10.60205540851922, 'longitude' => 125.11900359290644],
            ['name' => 'Bahay', 'latitude' => 10.713999484173186, 'longitude' => 125.03628928405463],
            ['name' => 'Balinsasayao', 'latitude' => 10.685820044165572, 'longitude' => 124.94572262041609],
            ['name' => 'Balocawe', 'latitude' => 10.744167868115793, 'longitude' => 124.97945402456996],
            ['name' => 'Balocawehay', 'latitude' => 10.715140375069039, 'longitude' => 124.95434325869016],
            ['name' => 'Barayong', 'latitude' => 10.750246758775413, 'longitude' => 124.9990259371534],
            ['name' => 'Bayabas', 'latitude' => 10.661992971428955, 'longitude' => 124.9976134113442],
            ['name' => 'Bito', 'latitude' => 10.75144310261463, 'longitude' => 125.00714134109631],
            ['name' => 'Buaya', 'latitude' => 10.706317218008207, 'longitude' => 125.08806295829201],
            ['name' => 'Buenavista', 'latitude' => 10.730377675212404, 'longitude' => 125.01964202169583],
            ['name' => 'Bulak', 'latitude' => 10.608688729394522, 'longitude' => 125.10917367462949],
            ['name' => 'Bunga', 'latitude' => 10.762420447160435, 'longitude' => 125.00422130746854],
            ['name' => 'Buntay', 'latitude' => 10.74658736903417, 'longitude' => 125.00977959664215],
            ['name' => 'Burubud-an', 'latitude' => 10.694384568474637, 'longitude' => 125.0081657079524],
            ['name' => 'Cadac-an', 'latitude' => 10.727157214365771, 'longitude' => 125.0084024455363],
            ['name' => 'Cagbolo', 'latitude' => 10.655158327090586, 'longitude' => 125.0339823906944],
            ['name' => 'Can-aporong', 'latitude' => 10.740469352684167, 'longitude' => 125.00425996375218],
            ['name' => 'Canmarating', 'latitude' => 10.727619877446699, 'longitude' => 124.98930537963092],
            ['name' => 'Can-uguib', 'latitude' => 10.738780060958566, 'longitude' => 125.01051318869432],
            ['name' => 'Capilian', 'latitude' => 10.702817860670669, 'longitude' => 124.9702225301883],
            ['name' => 'Combis', 'latitude' => 10.62562966608528, 'longitude' => 125.05253300356448],
            ['name' => 'Dingle', 'latitude' => 10.649737731860622, 'longitude' => 125.01378408028145],
            ['name' => 'Guintagbucan', 'latitude' => 10.755186861085503, 'longitude' => 125.00503692500958],
            ['name' => 'Hampipila', 'latitude' => 10.672835676883905, 'longitude' => 125.04410663398276],
            ['name' => 'Katipunan', 'latitude' => 10.726031841075345, 'longitude' => 124.96322994553682],
            ['name' => 'Kikilo', 'latitude' => 10.620450042510798, 'longitude' => 125.09949312003403],
            ['name' => 'Laray', 'latitude' => 10.668572965403978, 'longitude' => 125.01419681593907],
            ['name' => 'Lawa-an', 'latitude' => 10.723881191811591, 'longitude' => 125.03066787390223],
            ['name' => 'Libertad', 'latitude' => 10.59456298039644, 'longitude' => 125.04469777936549],
            ['name' => 'Loyonsawang', 'latitude' => 10.74335071104639, 'longitude' => 125.01201138472132],
            ['name' => 'Mag-atubang', 'latitude' => 10.73917327274402, 'longitude' => 124.99343698582472],
            ['name' => 'Mahagna', 'latitude' => 10.641091006118064, 'longitude' => 125.0361416067962],
            ['name' => 'Mahayahay', 'latitude' => 10.551441425421086, 'longitude' => 125.06362470779226],
            ['name' => 'Maitum', 'latitude' => 10.683090377689942, 'longitude' => 124.97000770220527],
            ['name' => 'Malaguicay', 'latitude' => 10.70864365001417, 'longitude' => 125.06904878968304],
            ['name' => 'Matagnao', 'latitude' => 10.679913899727351, 'longitude' => 125.02091783471653],
            ['name' => 'Nalibunan', 'latitude' => 10.73780141143177, 'longitude' => 125.01335645966635],
            ['name' => 'Nebga', 'latitude' => 10.633511741164584, 'longitude' => 125.05810671804085],
            ['name' => 'New Taligue', 'latitude' => 10.580737881587792, 'longitude' => 125.07741455109452],
            ['name' => 'Odiongan', 'latitude' => 10.70965365430414, 'longitude' => 124.98652569387542],
            ['name' => 'Old Taligue', 'latitude' => 10.567502535178704, 'longitude' => 125.05254845891827],
            ['name' => 'Pagsang-an', 'latitude' => 10.711419194601103, 'longitude' => 124.99796351605494],
            ['name' => 'Paguite', 'latitude' => 10.702430076581164, 'longitude' => 124.9563470949206],
            ['name' => 'Parasanon', 'latitude' => 10.617122552142124, 'longitude' => 125.04295967571878],
            ['name' => 'Picas Sur', 'latitude' => 10.688058682550308, 'longitude' => 124.98936972936042],
            ['name' => 'Pilar', 'latitude' => 10.703187507500528, 'longitude' => 125.03606887496834],
            ['name' => 'Pinamanagan', 'latitude' => 10.535713185342106, 'longitude' => 125.05532515204024],
            ['name' => 'Salvacion', 'latitude' => 10.688236701605854, 'longitude' => 125.04157891932351],
            ['name' => 'San Francisco', 'latitude' => 10.692974222762233, 'longitude' => 125.09931438764526],
            ['name' => 'San Isidro', 'latitude' => 10.76196700913619, 'longitude' =>  124.998945677997],
            ['name' => 'San Roque', 'latitude' => 10.637230947607668, 'longitude' => 125.08815705838536],
            ['name' => 'Santa Fe', 'latitude' => 10.737335735577073, 'longitude' => 125.0174818054167],
            ['name' => 'Santa Lucia', 'latitude' => 10.649735105894539, 'longitude' => 125.06638148821214],
            ['name' => 'Santo Niño', 'latitude' => 10.734838475804724, 'longitude' =>  125.0174935307469],
            ['name' => 'Tabigue', 'latitude' => 10.737717011051002, 'longitude' =>  124.98233834498816],
            ['name' => 'Tadoc', 'latitude' => 10.708174674903006, 'longitude' => 125.00712628140306],
            ['name' => 'Tib-o', 'latitude' => 10.67239363326104, 'longitude' => 125.09116661809318],
            ['name' => 'Tinalian', 'latitude' => 10.710104345574301, 'longitude' => 125.01955593703363],
            ['name' => 'Tinocolan', 'latitude' => 10.5548885922413, 'longitude' => 125.07462931342442],
            ['name' => 'Tuy-a', 'latitude' => 10.626923066766912, 'longitude' => 125.04303130522086],
            ['name' => 'Victory', 'latitude' => 10.739811353134412, 'longitude' => 125.01609583139727]
        ];

        // Insert the barangays into the database
        foreach ($barangays as $barangay) {
            DB::table('barangays')->insert([
                'name' => $barangay['name'],
                'latitude' => $barangay['latitude'],
                'longitude' => $barangay['longitude']
            ]);
        }
    }
}

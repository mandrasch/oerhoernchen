// 2DO: use name space, ignore this file (and images) in repo for forks
var oer_provider_list = [
 {
  'name': 'KindOERgarten.de – Freies Material für das Kindergartenalter',
  'url': 'kindoergarten.de',
  'image': 'kindoergarten.png'
},{
  'name': 'IDeRblog: Übungsdatenbank für Rechtschreibung für Kinder - Landesinstitut für Pädagogik und Medien, Saarland',
  'url': 'typo3.lpm.uni-sb.de/iderblog/fuer-erwachsene/uebungsdatenbank-online/',
  'image': 'iderblog.png'
},{
  'name': 'SEGU Geschichte - Projekt von Dr. Christoph Pallaske',
  'url': 'segu-geschichte.de',
  'image': 'segu_geschichte.jpg'
}, {
  'name': 'Serlo - Die freie Lernplattform. Serlo Education e.V.',
  'url': 'de.serlo.org',
  'image': 'serlo.png'
}, {
  'name': 'Memucho - Schneller lernen, länger wissen.',
  'url': 'memucho.de',
  'image': 'memucho.png'
}, {
  'name': 'Medien in die Schule (Medienpädagogik) - FSM, FSF, Google',
  'url': 'medien-in-die-schule.de',
  'image': 'medien-in-die-schule.jpg'
}, {
  'name': 'Zentrale für Unterrichtsmedien e.V.',
  'url': 'zum.de',
  'image': 'zum.jpg'
}, {
  'name': 'EDUdigitalLE - Unterrichtsmaterial von Studierenden der Universität Leipzig',
  'url': 'oer.uni-leipzig.de',
  'image': 'edudigitalle.png'
}, {
  'name': 'rpi virtuell',
  'url': 'material.rpi-virtuell.de',
  'image': 'rpi_virtuell.png'
}, {
  'name': 'Offene Naturführer',
  'url': 'offene-naturfuehrer.de',
  'image': 'offene_naturfuehrer.png'
}, {
  'name': 'teachSam - Bildungsserver für Schülerinnen und Schüler, Studierende und Lehrkräfte.',
  'url': 'teachsam.de',
  'image': 'teachsam.png'
},  {
  'name': 'ChiLe - Chemie interaktiv lernen',
  'url': 'chemieunterricht-interaktiv.de',
  'image': 'chile.png'
}, {
  'name': 'Ö1 macht Schule - Gemeinschaftsprojekt von Radio Österreich 1 (Ö1), BMBWF und der PH Wien.',
  'url': 'oe1macht.schule',
  'image': 'oe1machtschule.png'
},{
  'name':'Edulabs Bildung in der digitalen Welt - Open Knowledge Foundation Deutschland e.V.',
  'url':'edulabs.de/oer/',
  'image':'edulabs.png'
},{
  'name':'Digitale Spielewelten (Medienpädagogik) - Projekt von Spielraum TH Köln, Stiftung Digitale Spielekultur',
  'url':'digitale-spielewelten.de',
  'image':'digitale_spielewelten.png'
},{
  'name': 'Wikiversity - Wikimedia Foundation',
  'url': 'de.wikiversity.org',
  'image': 'wikiversity.png'
},];

var mixed_provider_list =
  [{
    'name': 'Bundeszentrale für Politische Bildung',
    'url': 'bpb.de',
    'image': 'bpb.jpg'
  }, {
    'name': 'iMooX - Plattform für offene Online-Kurse (MOOCs)',
    'url': 'imoox.at',
    'image': 'imoox.png'
  }, {
    'name': 'oncampus - offene Online Kurse',
    'url': 'mooin.oncampus.de',
    'image': 'mooin.png'
  },{
    'name': 'Lecture2Go Universität Hamburg',
    'url': 'lecture2go.uni-hamburg.de',
    'image': 'lecture2go.png'
  }, {
    'name': 'Lehrer Online',
    'url': 'lehrer-online.de',
    'image': 'lehrer_online.png'
  }, {
    'name': 'Medienportal Siemens Stiftung',
    'url': 'medienportal.siemens-stiftung.org',
    'image': 'siemens_stiftung.png'
  }, {
    'name': 'openlearnware - TU Darmstadt',
    'url': 'openlearnware.de',
    'image': 'openlearnware.png'
  }, {
    'name': 'tutory.de - Arbeitsblätter online gestalten',
    'url': 'tutory.de',
    'image': 'tutory.png'
  }, {
    'name': 'Heinrich-Heine-Universität Düsseldorf Mediathek',
    'url': 'mediathek.hhu.de',
    'image': 'hhumediathek.png'
  },{
    'name':'OER Commons (englischsprachig)',
    'url':'oercommons.org',
    'image':'oercommons.png'
  }];


var media_provider_list = [{
    'id': 'youtube',
    'name': 'YouTube',
    'url': 'youtube.com',
    'image': 'youtube.png'
  }, {
    'id': 'flickr',
    'name': 'flickr',
    'url': 'flickr.com',
    'image': 'flickr.png'
  }, {
    'id': 'googleimages',
    'name': 'Google Bildersuche',
    'url': 'google.de/imghp',
    'image': 'google_image_search.png'
  },
  /*2DO: Audio/Video*/
  {
    'id': 'pixabay',
    'name': 'Pixabay (CC0 Fotos/Bilder)',
    'url': 'pixabay.de',
    'image': 'pixabay.png'
  },{
    'id': 'pixabay-video',
    'name': 'Pixabay (CC0 Videos)',
    'url': 'pixabay.de',
    'image': 'pixabay_video.png'
  }, {
    'id': 'freemusicarchive',
    'name': 'Free Music Archive (FMA)',
    'url': 'freemusicarchive.com',
    'image': 'freemusicarchive.png'
  }, {
    'id': 'wikimediacommons',
    'name': 'Wikimedia Commons',
    'url': 'commons.wikimedia.org',
    'image': 'wikimedia_commons.png'
  }, {
    'id': 'edutags',
    'name': 'Edutags - Social Bookmarking für Lehr- und Lernmaterial',
    'url': 'edutags.de',
    'image': 'edutags.png'
  },
  {
    'id':'freesound',
    'name':'freesound.org',
    'url':'freesound.org',
    'image':'freesound.png'
  }
]

var not_compatible_provider_list =
  [{
    /* badge image from pixabay: https://pixabay.com/de/abzeichen-flair-englisch-sprache-1093968/ */
    'id': 'mason',
    'name': 'Mason OER Metafinder (Englischssprachige Inhalte)',
    'url': 'mason.deepwebaccess.com/mason__MasonLibrariesOpenEducationResources_5f4/desktop/en/search.html',
    'image': 'mason.png'
  },
  {
    'name': 'Elixier Bildungssuchmaschine',
    'url': 'bildungsserver.de/elixier/',
    'image': 'elixier.png'
  }, {
    'name': 'Learnline NRW',
    'url': 'learnline.schulministerium.nrw.de',
    'image': 'learnline.png'
  }
]
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
},
{
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
},
{
  'name':'Umwelt im Unterricht - Bundesministerium für Umwelt, Naturschutz und nukleare Sicherheit',
  'url':'umwelt-im-unterricht.de',
  'image':'umwelt_im_unterricht.png'
},{
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


var media_provider_list = [
  /* edu */


  /* photos / graphics */
  {
    'id': 'pixabay',
    'name': 'Pixabay - Fotos/Bilder unter CC0-Lizenz',
    'url': 'pixabay.de',
    'image': 'pixabay.png'
  },
  {
    'id': 'flickr',
    'name': 'flickr - Bilder von Fotograf*innen aus aller Welt',
    'url': 'flickr.com',
    'image': 'flickr.png'
  }, {
    'id': 'googleimages',
    'name': 'Google Bildersuche',
    'url': 'google.de/imghp',
    'image': 'google_image_search.png'
  },
  {
    'id': 'wikimediacommons',
    'name': 'Wikimedia Commons - Bilder, Videos und andere Medieninhalte',
    'url': 'commons.wikimedia.org',
    'image': 'wikimedia_commons.png'
  },
  {
    'id': 'openclipart',
    'name': 'Open Clipart - Grafiken / Icons unter CC0/Public Domain',
    'url': 'openclipart.org',
    'image': 'openclipart.png'
  },
  {
    'id': 'nounproject',
    'name': 'Nounproject - Freie Grafiken / Icons unter CC BY (oder CC0/Public Domain) Lizenz',
    'url': 'thenounproject.com',
    'image': 'nounproject.png'
  },
  /* cultural heritage */
  {
    'id': 'europeana',
    'name': 'Europeana Collections - Inhalte in europäischen Archiven, Bibliotheken und Museen suchen',
    'url': 'europeana.eu',
    'image':'europeana.png'
  },{
    'id':'met',
    'name':'Metropolitan Museum of Art - Zeitgeschichtliche Kunstwerke unter CC0/Public Domain',
    'url':'metmuseum.org',
    'image':'met.png'
  },
  {
    'id':'rijksmuseum',
    'name':'Rijksmuseum Amsterdam Riijksstudio - Kunstwerke unter CC0/Public Domain',
    'url':'rijksmuseum.nl/en/search',
    'image':'rijksmuseum.png'
  },


/* video */
  {
    'id': 'youtube',
    'name': 'YouTube',
    'url': 'youtube.com',
    'image': 'youtube.png'
  }, 
  {
    'id': 'pixabay-video',
    'name': 'Pixabay - Videos unter CC0-Lizenz',
    'url': 'pixabay.de',
    'image': 'pixabay_video.png'
  },
  {
    'id': 'khanacademy',
    'name': 'Khanacademy - Interaktive Lerninhalte unter CC BY-NC-SA',
    'url': 'de.khanacademy.org/',
    'image': 'khanacademy.png'
  },
  /* 2DO: vimeo! */
  /*{

  },*/
  /*2DO: Audio*/
  {
    'id': 'freemusicarchive',
    'name': 'Free Music Archive (FMA) - Songs unter freier Lizenz',
    'url': 'freemusicarchive.com',
    'image': 'freemusicarchive.png'
  },  
  {
    'id':'freesound',
    'name':'freesound.org - Audioschnipsel, Soundeffekte und Jingles',
    'url':'freesound.org',
    'image':'freesound.png'
  },
  {
    'id':'incompetech',
    'name':'incompetech.com - Songs unter freier Lizenz',
    'url':'incompetech.com',
    'image':'incompetech.png'
  },
  {
    'id':'soundcloud',
    'name':'Soundcloud - Musikplattform',
    'url':'soundcloud.com',
    'image':'soundcloud.png'
  },
  {
    'id':'digccmixter',
    'name':'dig.ccmixter.org - Songs unter freier CC-BY-Lizenz (oder CC BY NC und CCplus)',
    'url':'dig.ccmixter.org',
    'image':'digccmixter.png'
  },
  /* others */
  {
    'id':'medienpaedagogikpraxisblog',
    'name':'Medienpädagogik Praxisblog - Inspiration und Anleitungen unter freier Lizenz',
    'url':'medienpaedagogik-praxis.de',
    'image':'medienpaedagogik_praxisblog.png'
  },
   {
    'id':'medienistik',
    'name':'Medienistik - Innovative Unterrichtsmaterialien fürs digitale Zeitalter',
    'url':'medienistik.wordpress.com',
    'image':'medienistik.png'
  },
  {
    'id':'ebildungslabor',
    'name':'eBildungslabor - Initiative von Nele Hirsch für zeitgemäßes Lehren und Lernen (CC BY)',
    'url':'ebildungslabor.de',
    'image':'ebildungslabor.png'
  },
  {
    'id': 'edutags',
    'name': 'Edutags - Social Bookmarking für Lehr- und Lernmaterial',
    'url': 'edutags.de',
    'image': 'edutags.png'
  },
  {
    'id':'wbweb',
    'name':'wb-web: Professionalitätsentwicklung von Lehrenden in der Erwachsenen- und Weiterbildung (CC BY SA)',
    'url':'wb-web.de',
    'image':'wb-web.png'
  }
  /* 2DO: slideshare --> not possible to filter by license? */
]

var not_compatible_provider_list =
  [
  {
    'id':'turtlestich',
    'name':'TurtleStitch (OER-Projekt): Kinder können mit WebApp Programme für Stickmaschinen schreiben',
    'url':'turtlestitch.org',
    'image':'turtlestitch.png'
  },
  {
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
    'name': 'Learnline NRW - Repository für Unterrichtsmaterial NRW',
    'url': 'learnline.schulministerium.nrw.de',
    'image': 'learnline.png'
  },
  {
    'name':'search.creativecommons.org - Vorbild des OERhörnchens',
    'url':'search.creativecommons.org',
    'image':'ccsearch.png'
  },
  {
    'name':'CC search beta - zweite Version der CC Suche (Betaversion)',
    'url':'ccsearch.creativecommons.org',
    'image':'ccsearch_beta.png'
  }
]
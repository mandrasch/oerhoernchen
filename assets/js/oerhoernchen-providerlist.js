// 2DO: use name space, ignore this file (and images) in repo for forks
var oer_provider_list = [
  {
    'name': 'KindOERgarten.de – Freies Material für das Kindergartenalter',
    'url': 'kindoergarten.de',
    'image': 'kindoergarten.png'
  }, {
    'name': 'IDeRblog: Übungsdatenbank für Rechtschreibung für Kinder - Landesinstitut für Pädagogik und Medien, Saarland',
    'url': 'typo3.lpm.uni-sb.de/iderblog/fuer-erwachsene/uebungsdatenbank-online/',
    'image': 'iderblog.png'
  },{
    'name': 'Zentrale für Unterrichtsmedien e.V.',
    'url': 'zum.de',
    'image': 'zum.jpg'
  }, {
    'name': 'SEGU Geschichte - Projekt von Dr. Christoph Pallaske',
    'url': 'segu-geschichte.de',
    'image': 'segu_geschichte.jpg'
  }, {
    'name': 'Serlo - Die freie Lernplattform (Serlo Education e.V.)',
    'url': 'de.serlo.org',
    'image': 'serlo.png'
  },
  {
    'name': 'EDUdigitalLE - Unterrichtsmaterial von Studierenden der Universität Leipzig',
    'url': 'oer.uni-leipzig.de',
    'image': 'edudigitalle.png'
  },
  {
    'name': 'dll -  digital.learning.lab: Hamburger Kompetenzzentrum für die Unterrichtsgestaltung in digitalen Zeiten',
    'url': 'digitallearninglab.de',
    'image': 'digitallearninglab.png'
  },
  {
    'name': 'digiLL - Universitätsverbund für digitales Lehren und Lernen in der Lehrer/-innenbildung',
    'url': 'digill.de',
    'image': 'digill.png'
  },
  {
    'name': 'Memucho - Schneller lernen, länger wissen.',
    'url': 'memucho.de',
    'image': 'memucho.png'
  },
  {
    'name': 'Demokratielabore Materialsammlung',
    'url': 'demokratielabore.de/materialsammlung/',
    'image': 'demokratielabore.png'
  },
  {
    'name': 'Medien in die Schule (Medienpädagogik) - FSM, FSF, Google',
    'url': 'medien-in-die-schule.de',
    'image': 'medien-in-die-schule.jpg'
  },
 {
    'name': 'Offene Naturführer',
    'url': 'offene-naturfuehrer.de',
    'image': 'offene_naturfuehrer.png'
  },
  {
    'name': 'Umwelt im Unterricht - Bundesministerium für Umwelt, Naturschutz und nukleare Sicherheit',
    'url': 'umwelt-im-unterricht.de',
    'image': 'umwelt_im_unterricht.png'
  }, {
    'name': 'teachSam - Bildungsserver für Schülerinnen und Schüler, Studierende und Lehrkräfte.',
    'url': 'teachsam.de',
    'image': 'teachsam.png'
  },
  {
    'name': 'oer.schule - Öffentlich gefördertes OER-Portal aus Bayern',
    'url': 'oer.schule',
    'image': 'oerschule.png'
  },
  {
    'name': 'ChiLe - Chemie interaktiv lernen',
    'url': 'chemieunterricht-interaktiv.de',
    'image': 'chile.png'
  },
  /* does not support machine readable licenses anymore on material.rpi-virtuell? */
  {
    'name': 'Virtuelles Religionspädagogisches Institut',
    'url': 'rpi-virtuell.de',
    'image': 'rpi_virtuell.png'
  },{
    'name': 'Ö1 macht Schule - Gemeinschaftsprojekt von Radio Österreich 1 (Ö1), BMBWF und der PH Wien.',
    'url': 'oe1macht.schule',
    'image': 'oe1machtschule.png'
  }, {
    'name': 'Edulabs Bildung in der digitalen Welt - Open Knowledge Foundation Deutschland e.V.',
    'url': 'edulabs.de/oer/',
    'image': 'edulabs.png'
  },
  {
    'name': 'Hamburg Open Online University',
    'url': 'hoou.de',
    'image': 'hoou.png'
  },
  {
    'name': 'Wikiversity - Wikimedia Foundation',
    'url': 'de.wikiversity.org',
    'image': 'wikiversity.png'
  }
];

var mixed_provider_list = [{
    'name': 'tutory.de - Arbeitsblätter online gestalten',
    'url': 'tutory.de',
    'image': 'tutory.png'
  },
  {
    'name': 'Medienportal Siemens Stiftung',
    'url': 'medienportal.siemens-stiftung.org',
    'image': 'siemens_stiftung.png'
  },
  {
    'name': 'Lehrer Online',
    'url': 'lehrer-online.de',
    'image': 'lehrer_online.png'
  },
  {
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
  },
  {
    'name': 'oerbw.de - OER-Portal Baden-Württemberg (Hochschule)',
    'url': 'oerbw.de',
    'image': 'oerbwzoerr.png'
  }
];


var media_provider_list = [{
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
  /* edu - lots of problems ;-) */
  /* elixier - no multi select for licenses possible right now */
  {
    'id': 'edutags',
    'name': 'Edutags - Social Bookmarking für Lehr- und Lernmaterial',
    'url': 'edutags.de',
    'image': 'edutags.png'
  },
  {
    'id': 'elixier',
    'name': 'Elixier - Bildungsuchmaschine mit mehreren Bildungsservern der Bundesländer',
    'url': 'bildungsserver.de/elixier/',
    'image': 'elixier.png'
  },
  /* no multi select for licenses possible right now */
  {
    'id': 'learnline',
    'name': 'Learnline - NRW Buldungssuchmaschine',
    'url': 'learnline.schulministerium.nrw.de',
    'image': 'learnline.png'
  },
  /* photos / graphics */
  /* pixabay changed license unfortunately, no CC0 anymore */
  /*{
    'id': 'pixabay',
    'name': 'Pixabay - Fotos/Bilder unter CC0-Lizenz',
    'url': 'pixabay.de',
    'image': 'pixabay.png'
  },*/
  /* cultural heritage */
  {
    'id': 'europeana',
    'name': 'Europeana Collections - Inhalte in europäischen Archiven, Bibliotheken und Museen suchen',
    'url': 'europeana.eu',
    'image': 'europeana.png'
  }, {
    'id': 'met',
    'name': 'Metropolitan Museum of Art - Zeitgeschichtliche Kunstwerke unter CC0/Public Domain',
    'url': 'metmuseum.org',
    'image': 'met.png'
  },
  {
    'id': 'rijksmuseum',
    'name': 'Rijksmuseum Amsterdam Riijksstudio - Kunstwerke unter CC0/Public Domain',
    'url': 'rijksmuseum.nl/en/search',
    'image': 'rijksmuseum.png'
  },



  /* video */
  {
    'id': 'youtube',
    'name': 'YouTube',
    'url': 'youtube.com',
    'image': 'youtube.png'
  },
  /* pixabay changed license unfortunately, no CC0 anymore */
  /*{
    'id': 'pixabay-video',
    'name': 'Pixabay - Videos unter CC0-Lizenz',
    'url': 'pixabay.de',
    'image': 'pixabay_video.png'
  },*/
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
    'id': 'freesound',
    'name': 'freesound.org - Audioschnipsel, Soundeffekte und Jingles',
    'url': 'freesound.org',
    'image': 'freesound.png'
  },
  {
    'id': 'incompetech',
    'name': 'incompetech.com - Songs unter freier Lizenz',
    'url': 'incompetech.com',
    'image': 'incompetech.png'
  },
  {
    'id': 'soundcloud',
    'name': 'Soundcloud - Musikplattform',
    'url': 'soundcloud.com',
    'image': 'soundcloud.png'
  },
  {
    'id': 'digccmixter',
    'name': 'dig.ccmixter.org - Songs unter freier CC-BY-Lizenz (oder CC BY NC und CCplus)',
    'url': 'dig.ccmixter.org',
    'image': 'digccmixter.png'
  },
  /* others */
  {
    'id': 'medienpaedagogikpraxisblog',
    'name': 'Medienpädagogik Praxisblog - Inspiration und Anleitungen unter freier Lizenz',
    'url': 'medienpaedagogik-praxis.de',
    'image': 'medienpaedagogik_praxisblog.png'
  },
  {
    'id': 'medienistik',
    'name': 'Medienistik - Innovative Unterrichtsmaterialien fürs digitale Zeitalter',
    'url': 'medienistik.wordpress.com',
    'image': 'medienistik.png'
  },
  {
    'id': 'ebildungslabor',
    'name': 'eBildungslabor - Initiative von Nele Hirsch für zeitgemäßes Lehren und Lernen (CC BY)',
    'url': 'ebildungslabor.de',
    'image': 'ebildungslabor.png'
  },
  {
    'id': 'wbweb',
    'name': 'wb-web: Professionalitätsentwicklung von Lehrenden in der Erwachsenen- und Weiterbildung (CC BY SA)',
    'url': 'wb-web.de',
    'image': 'wb-web.png'
  }
  /* 2DO: slideshare --> not possible to filter by license? */
]
/* also archive, some pages are compatible, but I have to deal with the 32 word limit on google :-/ ;-) */
var not_compatible_provider_list = [
  /* unfortunately no machine readable license yet */
  {
    'name': 'Materialien für Bildung für nachhaltige Entwicklung',
    'url': 'bne-portal.de/de/lehrmaterialien',
    'image': 'bneportal.png'
  },
  {
    'id': 'turtlestich',
    'name': 'TurtleStitch (OER-Projekt): Kinder können mit WebApp Programme für Stickmaschinen schreiben',
    'url': 'turtlestitch.org',
    'image': 'turtlestitch.png'
  },
  {
    'name': 'MoodleNet - föderiertes Social Network für Lehrer:innen',
    'url': 'moodle.net',
    'image': 'moodlenet.png'
  },
  /* replaced with OASIS ,
  {
badge image from pixabay: https://pixabay.com/de/abzeichen-flair-englisch-sprache-1093968/
    'id': 'mason',
    'name': 'Mason OER Metafinder (Englischssprachige Inhalte)',
    'url': 'mason.deepwebaccess.com/mason__MasonLibrariesOpenEducationResources_5f4/desktop/en/search.html',
    'image': 'mason.png'
  },*/
  {
    'name': 'Learnline NRW - Repository für Unterrichtsmaterial NRW',
    'url': 'learnline.schulministerium.nrw.de',
    'image': 'learnline.png'
  },
  /* unfortunately no machine readable license yet */
  {
    'name': 'Landesbildungsserver Baden-Württemberg',
    'url': 'schule-bw.de/oer',
    'image': 'schulebw.png'
  },
  {
    'name': 'AULA Resources - Schule gemeinsam gestalten (politik-digital e.V.)',
    'url': 'aula-blog.website/aula-resources/',
    'image': 'aula.png'
  },
  {
    'name': 'Digitale Spielewelten (Medienpädagogik) - Projekt von Spielraum TH Köln, Stiftung Digitale Spielekultur',
    'url': 'digitale-spielewelten.de',
    'image': 'digitale_spielewelten.png'
  },
  {
    'name': 'Roberta - Lernen mit Robotern: Materialien',
    'url': 'www.roberta-home.de/lehrkraefte/roberta-materialien/',
    'image': 'roberta.png'
  },
  {
    'name': 'Calliope Material',
    'url': 'calliope.cc/schulen/schulmaterial',
    'image': 'calliope.png'
  },
  {
    'name': 'Coding for Tomorrow - Initiative der Vodafone Stiftung',
    'url': 'coding-for-tomorrow.de/downloads/',
    'image': 'codingfortomorrow.png'
  },
  /* unfortunately no machine readable license yet */
  {
    'name': 'zebis.ch - Schweizer Portal mit OER-Uploadmöglichkeit',
    'url': 'zebis.ch',
    'image': 'zebis.png'
  },
  /* Higher Education */
  {
    'name': 'TIB AV Portal - öffentlich geförderte Plattform für wissenschaftliche Videos',
    'url': 'av.tib.eu',
    'image': 'tibav.png'
  },
  {
    'name': 'Lecture2Go Universität Hamburg',
    'url': 'lecture2go.uni-hamburg.de',
    'image': 'lecture2go.png'
  }, {
    'name': 'openlearnware - TU Darmstadt',
    'url': 'openlearnware.de',
    'image': 'openlearnware.png'
  }, {
    'name': 'Heinrich-Heine-Universität Düsseldorf Mediathek',
    'url': 'mediathek.hhu.de',
    'image': 'hhumediathek.png'
  },
  {
    'name': 'OER-Initiative Fakultät für Bauingenieurwesen RWTH Aachen',
    'url': 'youtube.com/channel/UCMg7OPagfjM_eUYsDw3c4-A',
    'image': 'rwthcivilengineering.png'
  },
  {
    'name': 'Virtual Linguistics Campus (Uni Marburg)',
    'url': 'linguistics.online.uni-marburg.de',
    'image': 'virtuallinguisticscampus.png'
  },
  {
    'name': 'bridge.nrw - Digitale Hochschulbrücke westliches Ruhrgebiet / Niederrhein',
    'url': 'bridge.nrw',
    'image': 'bridgenrw.png'
  },

  {
    'name': 'DuEPublico2 - OER an der Universität Duisburg-Essen',
    'url': 'duepublico2.uni-due.de/content/oer/index.xml',
    'image': 'duepublico.png'
  },
  {
    'name': 'Übersetzungsprojekt der Webwork-Mathematik-Aufgaben an der Uni Siegen',
    'url': 'webwork.math.uni-siegen.de',
    'image': 'webwork.png'
  },
  {
    'name': 'Mathematik meistern mit optes (Selbststudium Hochschule)',
    'url': 'optes.de',
    'image': 'optes.png'
  },
  {
    'name': 'OER Department Information Systems WWU Münster',
    'url': 'oer.gitlab.io',
    'image': 'oergitlabio.png'
  },
  /*coming soon as OER?
  {
    'name':'Studiport'
  },*/
  {
    'name': 'freecodecamp.org - Selbstlerninhalte unter CC BY-ShareAlike 4.0',
    'url': 'freecodecamp.org',
    'image': 'freecodecamp.png'
  },
  {
    'name': 'OASIS: OER-Suchmaschine der Universitätsbibliothek Milne Library,New York',
    'url': 'oasis.geneseo.edu/',
    'image': 'oasis.png'
  },
  {
    'name': 'MERLOT - Portal der California State University',
    'image': 'merlot.png',
    'url': 'merlot.org'
  },
  {
    'name': 'OER Commons (englischsprachig)',
    'url': 'oercommons.org',
    'image': 'oercommons.png'
  }

]

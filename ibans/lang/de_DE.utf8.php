<?php

#[AllowDynamicProperties]
class de_DE {
    public function __construct() {
        $this->version = 2;
        $array = array();
        $this->array = &$array;

        $array["index.welcome.main"] = "Willkommen zu {server}'s Bann Liste.";
        $array["index.welcome.sub"] = "Hier sind alle Bestrafungen aufgeführt";

        $array["title.index"] = 'Startseite';
        $array["title.bans"] = 'Verbannungen';
        $array["title.mutes"] = 'Gestummte';
        $array["title.warnings"] = 'Verwarnungen';
        $array["title.kicks"] = 'Gekickte';
        $array["title.player-history"] = "Kürzliche Bestrafungen für {name}";
        $array["title.staff-history"] = "Kürzliche Bestrafungen von {name}";


        $array["generic.ban"] = "Verbannungen";
        $array["generic.mute"] = "Stumm";
        $array["generic.warn"] = "Verwarnung";
        $array["generic.kick"] = "Kick";

        $array["generic.unban"] = "Entbann";
        $array["generic.unmute"] = "Entstumm";

        $array["generic.banned"] = "Gebannt";
        $array["generic.muted"] = "Stumm";
        $array["generic.warned"] = "Verwarnt";
        $array["generic.kicked"] = "Gekickt";

        $array["generic.unbanned"] = "Entbannt";
        $array["generic.unmuted"] = "Entstummt";

        $array["generic.banned.by"] = $array["generic.banned"] . " Von";
        $array["generic.muted.by"] = $array["generic.muted"] . " Von";
        $array["generic.warned.by"] = $array["generic.warned"] . " Von";
        $array["generic.kicked.by"] = $array["generic.kicked"] . " Von";

        $array["generic.ipban"] = "IP " . $array["generic.ban"];
        $array["generic.ipmute"] = "IP " . $array["generic.mute"];

        $array["generic.permanent"] = "Permanent";
        $array["generic.permanent.ban"] = $array['generic.permanent'] . ' ' . $array["generic.ban"];
        $array["generic.permanent.mute"] = $array['generic.permanent'] . ' ' . $array["generic.mute"];

        $array["generic.type"] = "Art";
        $array["generic.active"] = "Aktiv";
        $array["generic.inactive"] = "Inaktiv";
        $array["generic.expired"] = "Abgelaufen";
        $array["generic.expired.kick"] = "N/A";
        $array["generic.player-name"] = "Spieler";

        $array["page.expired.ban"] = '(' . $array["generic.unbanned"] . ')';
        $array["page.expired.ban-by"] = '(' . $array["generic.unbanned"] . ' von {name})';
        $array["page.expired.mute"] = '(' . $array["generic.unmuted"] . ')';
        $array["page.expired.mute-by"] = '(' . $array["generic.unmuted"] . ' von {name})';
        $array["page.expired.warning"] = '(' . $array["generic.expired"] . ')';

        $array["table.player"] = $array["generic.player-name"];
        $array["table.type"] = $array["generic.type"];
        $array["table.executor"] = "Moderator";
        $array["table.reason"] = "Grund";
        $array["table.reason.unban"] = $array["generic.unban"] . " " . $array["table.reason"];
        $array["table.reason.unmute"] = $array["generic.unmute"] . " " . $array["table.reason"];
        $array["table.date"] = "Datum";
        $array["table.expires"] = "Läuft ab in";
        $array["table.received-warning"] = "Verwarnung erhalten";


        $array["table.server.name"] = "Server";
        $array["table.server.scope"] = "Serverbereich";
        $array["table.server.origin"] = "Ursprungsserver";
        $array["table.server.global"] = "*";
        $array["table.pager.number"] = "Seite";

        $array["action.check"] = "Prüfe";
        $array["action.return"] = "Zurück zu {origin}";

        $array["error.missing-args"] = "Fehlende Argumente.";
        $array["error.name.unseen"] = "{name} hat den Server noch nie betreten.";
        $array["error.name.invalid"] = "Ungültiger Name.";
        $array["history.error.uuid.no-result"] = "Keine Bestrafungen gefunden.";
        $array["info.error.id.no-result"] = "Fehler: Konnte {type} nicht in der Datenbank finden.";
    }
}

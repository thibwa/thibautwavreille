/**
 * Created by thibautwavreille on 2/03/14.
 */
$(document).ready(function(e) {
    $.ajax({
        type: "GET",
        url: "https://api.github.com/users/thibwa/repos",
        dataType: "json",
        success: function(result) {
            result.sort(function(a,b){
                return new Date(b.updated_at) - new Date(a.updated_at);
            });
            for( i in result ) {
                var description = "";
                if(result[i].description != null)
                    description = result[i].description;
                $("#repo_list").append(
                    "<li>" +
                        "<p>" + description + "</p>" +
                        "<div class='meta'>" +
                        "<span class='icon icon-time date'>" + dateFormat(result[i].updated_at, "dd/mm/yyyy") + "</span>" +
                        "<a href='" + result[i].html_url  + "' target='_blank' class='more'><span>" + result[i].name + "</span></a>" +
                    "</div>" +
                "</li>"
            );
            }
        }
    });

    $.ajax({
        type: "GET",
        url: "https://api.github.com/repos/thibwa/investporc/issues",
        dataType: "json",
        success: function(result) {
            result.sort(function(a,b){
                return new Date(b.updated_at) - new Date(a.updated_at);
            });

            $("#issue_opened").append(
                "<h2>" + result[0].title + "</h2>" +
                "<span>" + truncate(result[0].body, 250, true) + "</span>" +
                "<div class='meta'>" + "<a href='" + result[0].user.html_url  + "' target='_blank' class='more'>" +
                    result[0].user.login + "</a></div>"
            );
        }
    });

    $.ajax({
        type: "GET",
        url: "https://api.github.com/repos/thibwa/investporc/issues",
        dataType: "json",
        success: function(result) {
            result.sort(function(a,b){
                return new Date(b.updated_at) - new Date(a.updated_at);
            });

            $("#issue_closed").append(
                "<h2>" + result[1].title + "</h2>" +
                    "<span>" + truncate(result[0].body, 250, true) + "</span>" +
                    "<div class='meta'>" + "<a href='" + result[1].user.html_url  + "' target='_blank' class='more'>" +
                    result[1].user.login + "</a></div>"
            );
        }
    });

    $.ajax({
        type: "GET",
        url: "https://api.github.com/repos/thibwa/investporc/collaborators",
        dataType: "json",
        success: function(result) {
            for( i in result ) {
                $("#issue_coloborator_ul").append(
                    "<li class='icon icon-circle-arrow-right'><a href='" + result[i].html_url  + "' target='_blank' class='more'>" + result[i].login + "</a></li>"
                );
            }
        }
    });
});

function truncate(str, n, useWordBoundary) {
    var singular, tooLong = str.length > n;
    useWordBoundary = useWordBoundary || true;

    // Edge case where someone enters a ridiculously long string.
    str = tooLong ? str.substr(0, n-1) : str;

    singular = (str.search(/\s/) === -1) ? true : false;
    if(!singular) {
        str = useWordBoundary && tooLong ? str.substr(0, str.lastIndexOf(' ')) : str;
    }

    return  tooLong ? str + '&hellip;' : str;
}
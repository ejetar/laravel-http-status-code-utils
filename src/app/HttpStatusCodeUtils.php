<?php

namespace Ejetar\HttpStatusCodeUtils;

class HttpStatusCodeUtils {
    static function getMessageFromCode($http_status_code, $locale = null) {
        if (!$locale)
            $locale = config('app.locale');

        switch ($http_status_code) {
            //(1xx) Information
            case 100:
                return __('http-status-code-utils::messages.continue', [], $locale);
                break;

            case 101:
                return __('http-status-code-utils::messages.switching_protocols', [], $locale);
                break;

            case 102:
                return __('http-status-code-utils::messages.processing', [], $locale);
                break;


            //(2xx) Success
            case 200:
                return __('http-status-code-utils::messages.ok', [], $locale);
                break;

            case 201:
                return __('http-status-code-utils::messages.created', [], $locale);
                break;

            case 202:
                return __('http-status-code-utils::messages.accepted', [], $locale);
                break;

            case 204:
                return __('http-status-code-utils::messages.no_content', [], $locale);
                break;


            //(3xx) Redirection
            case 300:
                return __('http-status-code-utils::messages.multiple_choices', [], $locale);
                break;

            case 301:
                return __('http-status-code-utils::messages.moved_permanently', [], $locale);
                break;

            case 302:
                return __('http-status-code-utils::messages.found', [], $locale);
                break;

            case 305:
                return __('http-status-code-utils::messages.use_proxy', [], $locale);
                break;

            case 307:
                return __('http-status-code-utils::messages.temporary_redirect', [], $locale);
                break;

            case 308:
                return __('http-status-code-utils::messages.permanent_redirect', [], $locale);
                break;


            //(4xx) Client error
            case 400:
                return __('http-status-code-utils::messages.bad_request', [], $locale);
                break;

            case 401:
                return __('http-status-code-utils::messages.unauthorized', [], $locale);
                break;

            case 402:
                return __('http-status-code-utils::messages.payment_required', [], $locale);
                break;

            case 403:
                return __('http-status-code-utils::messages.forbidden', [], $locale);
                break;

            case 404:
                return __('http-status-code-utils::messages.not_found', [], $locale);
                break;

            case 405:
                return __('http-status-code-utils::messages.method_not_allowed', [], $locale);
                break;

            case 407:
                return __('http-status-code-utils::messages.proxy_authentication_required', [], $locale);
                break;

            case 408:
                return __('http-status-code-utils::messages.request_timeout', [], $locale);
                break;

            case 409:
                return __('http-status-code-utils::messages.conflict', [], $locale);
                break;

            case 410:
                return __('http-status-code-utils::messages.gone', [], $locale);
                break;

            case 411:
                return __('http-status-code-utils::messages.length_required', [], $locale);
                break;

            case 412:
                return __('http-status-code-utils::messages.precondition_failed', [], $locale);
                break;

            case 413:
                return __('http-status-code-utils::messages.payload_too_large', [], $locale);
                break;

            case 414:
                return __('http-status-code-utils::messages.request-uri_too_long', [], $locale);
                break;

            case 415:
                return __('http-status-code-utils::messages.unsupported_media_type', [], $locale);
                break;

            case 417:
                return __('http-status-code-utils::messages.expectation_failed', [], $locale);
                break;

            case 422:
                return __('http-status-code-utils::messages.unprocessable_entity', [], $locale);
                break;

            case 423:
                return __('http-status-code-utils::messages.locked', [], $locale);
                break;

            case 424:
                return __('http-status-code-utils::messages.failed_dependency', [], $locale);
                break;

            case 426:
                return __('http-status-code-utils::messages.upgrade_required', [], $locale);
                break;

            case 428:
                return __('http-status-code-utils::messages.precondition_required', [], $locale);
                break;

            case 429:
                return __('http-status-code-utils::messages.too_many_requests', [], $locale);
                break;

            case 451:
                return __('http-status-code-utils::messages.unavailable_for_legal_reasons', [], $locale);
                break;

            //(5xx) Server error
            case 500:
                return __('http-status-code-utils::messages.internal_server_error', [], $locale);
                break;

            case 501:
                return __('http-status-code-utils::messages.not_implemented', [], $locale);
                break;

            case 503:
                return __('http-status-code-utils::messages.service_unavailable', [], $locale);
                break;

            case 505:
                return __('http-status-code-utils::messages.http_version_not_supported', [], $locale);
                break;

            case 511:
                return __('http-status-code-utils::messages.network_authentication_required', [], $locale);
                break;
        }
    }
}

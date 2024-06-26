# EduAdmin API Client

Include `eduadmin-api-client.php` in the pages you want to be able to use the API-client
against [EduAdmin](https://www.eduadmin.se)

This will enable the global command `EDUAPI()`, which is a singleton instance of the client.

Don't forget to call `EDUAPI()->SetCredentials( $api_user, $api_pass )` and then fetch a token by
calling `EDUAPI()->GetToken()`.

This token is currently valid for two weeks, so save it somewhere safe.
_(And never ever show it to the public)_

The token has a function to check its validity, but only against expiration. So, keep track if you get errors from the
API, then you should request a new token.

Here's a list of the current endpoints in the `OData`-property

- Bookings
- Categories
- Countries
- CourseLevels
- CourseTemplates
- CustomerGroups
- Customers
- CustomFields
- Events
- Grades
- InterestRegistrations
- Locations
- Participants
- PaymentTerms
- Personnel
- Persons
- PriceNames
- ProgrammeBookings
- Programmes
- ProgrammeInterestRegistrations
- ProgrammeStarts
- Regions
- Reports
- Subjects

All these endpoints support the functions:

```php
...->Search(
    $select,    // Nullable, adds the $select-parameter
    $filter,    // Nullable, adds the $filter-parameter
    $expand,    // Nullable, adds the $expand-parameter
    $orderby,   // Nullable, adds the $orderby-parameter
    $top,       // Nullable, adds the $top-parameter
    $skip,      // Nullable, adds the $skip-parameter
    $count      // Boolean, if true, adds number of records to result
)
...->GetItem(
    $id,        // The ID (Integer) of the resource you're getting
    $select,    // Nullable, adds the $select-parameter
    $expand     // Nullable, adds the $expand-parameter
)
```

The OData-endpoints inherits from `EduAdminODataClient`, that inherits from `EduAdminRESTClient`, but this class,
explicitly forbids you from using the `GET`, `POST`, `PATCH`, `PUT` and `DELETE` methods.

The current endpoints in the `REST`-property is:

- Booking
- Coupon
- Consent
- Customer
- Event
- InterestRegistration
- Organisation
- Participant
- Person
- Personnel
- ProgrammeBooking
- ProgrammeStart
- Report

Each of these endpoints contain their own methods, but it also inherits from `EduAdminRESTClient`, so you will have
access to `GET`, `POST`, `PATCH`, `PUT` and `DELETE` methods.

You can check out the [API documentation](https://api.eduadmin.se/) yourself, if you want to make something yourself.

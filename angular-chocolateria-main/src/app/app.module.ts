import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

// Angular Material
import { MatToolbarModule } from '@angular/material/toolbar';
import { MatLegacyButtonModule as MatButtonModule } from '@angular/material/legacy-button';
import { MatLegacyCardModule as MatCardModule } from '@angular/material/legacy-card';
import { MatGridListModule } from '@angular/material/grid-list';
import { MatIconModule } from '@angular/material/icon';
import { MatLegacyTableModule as MatTableModule } from '@angular/material/legacy-table';
import { MatLegacyFormFieldModule as MatFormFieldModule } from '@angular/material/legacy-form-field';
import { MatLegacyInputModule as MatInputModule } from '@angular/material/legacy-input';
import { MatLegacySnackBarModule as MatSnackBarModule } from '@angular/material/legacy-snack-bar';

const MaterialComponents = [
  MatToolbarModule,
  MatButtonModule,
  MatCardModule,
  MatGridListModule,
  MatIconModule,
  MatTableModule,
  MatFormFieldModule,
  MatInputModule,
  MatSnackBarModule
]

// Components
import { AppComponent } from './app.component';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { HeaderComponent } from './header/header.component';
import { FooterComponent } from './footer/footer.component';
import { ProductCardComponent } from './product-card/product-card.component';
import { PageHomeComponent } from './page-home/page-home.component';
import { PageCatalogComponent } from './page-catalog/page-catalog.component';
import { PageCartComponent } from './page-cart/page-cart.component';
import { PageContactUsComponent } from './page-contact-us/page-contact-us.component';
import { RouterModule } from '@angular/router';
import { appRoute } from './routes';
import { PageErrorComponent } from './page-error/page-error.component';

// state management
import { StoreModule } from '@ngrx/store';
import { productReducer } from './state/product.reducer';
import { ProductCounterComponent } from './product-counter/product-counter.component';

//StoreDevtoolsModule
import { StoreDevtoolsModule } from '@ngrx/store-devtools';
import { environment } from '../environments/environment';
import { SnackbarComponent } from './snackbar/snackbar.component'; // Angular CLI environment


@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    FooterComponent,
    ProductCardComponent,
    PageHomeComponent,
    PageCatalogComponent,
    PageCartComponent,
    PageContactUsComponent,
    PageErrorComponent,
    ProductCounterComponent,
    SnackbarComponent,
  ],
  imports: [
    BrowserModule,
    BrowserAnimationsModule,
    RouterModule.forRoot(appRoute),
    StoreModule.forRoot({ cart: productReducer }),
    StoreDevtoolsModule.instrument({
      maxAge: 25,
      logOnly: environment.production,
    }),
    [MaterialComponents]
  ],
  exports: [
    [MaterialComponents]
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }

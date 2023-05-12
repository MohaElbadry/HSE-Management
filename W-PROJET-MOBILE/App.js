import React from "react";
import { NavigationContainer } from "@react-navigation/native";
import { createNativeStackNavigator } from "@react-navigation/native-stack";
import Home from "./screens/Home";
import Login from "./screens/Login";
import Home_Screen from "./screens/Home_Screen";
import Add from "./screens/Add";
import AddRisk from "./screens/AddRisk";
import AddIncident from "./screens/AddIncident";
import AddEmergencie from "./screens/AddEmergencie";
import UserTasksList from "./screens/UserTasksList";
import Profile from "./screens/Profile";
import ProjSites from "./screens/ProjSites";

const config = {
    animation: "spring",
    config: {
        stiffness: 1000,
        damping: 500,
        mass: 3,
        overshootClamping: true,
        restDisplacementThreshold: 0.01,
        restSpeedThreshold: 0.01,
    },
};

export default function App() {
    const Stack = createNativeStackNavigator();
    return (
        <NavigationContainer>
            <Stack.Navigator
                initialRouteName="Home"
                screenOptions={{ headerShown: false }}
            >
                <Stack.Screen name="Home" component={Home} />
                <Stack.Screen name="Login" component={Login} />
                <Stack.Screen name="Home_Screen" component={Home_Screen} />
                <Stack.Screen name="Add" component={Add} />
                <Stack.Screen name="AddRisk" component={AddRisk} />
                <Stack.Screen name="AddIncident" component={AddIncident} />
                <Stack.Screen name="AddEmergencie" component={AddEmergencie} />
                <Stack.Screen name="UserTasksList" component={UserTasksList} />
                <Stack.Screen name="Profile" component={Profile} />
                <Stack.Screen name="ProjSites" component={ProjSites} />
            </Stack.Navigator>
        </NavigationContainer>
    );
}
